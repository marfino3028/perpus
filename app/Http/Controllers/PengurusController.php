<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pengurus;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\PengurusExport;
use Maatwebsite\Excel\Facades\Excel;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ar_pengurus = DB::table('pengurus')
        ->get();
        //select * from kategori ^
        return view('pengurus.index', compact('ar_pengurus')); 
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'nip'=>'required|unique:pengurus|max:10',
            'nama'=>'required|max:45',
            'alamat'=>'required',
            'tmp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
         ],[
             'nip.required'=>'NIP Wajib untuk diisi',
             'nip.unique'=>' NIP ini sudah ada',
             'nip.max'=>' NIP ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'alamat.required'=>'alamat Wajib untuk dipilih',
             'tmp_lahir.required'=>'Tempat Lahir Wajib untuk diisi',
             'tgl_lahir.required'=>'Tanggal Lahir Wajib untuk diisi',
              'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
         ])->validate();

        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nip.'.jpg';  
            $request->foto->move(public_path('img'), $fileName);
        }else{
            $fileName = '';
        }
        DB::table('pengurus')->insert(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'tmp_lahir'=>$request->tmp_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'foto'=>$fileName,
            ]
        );
         return redirect ('/pengurus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_pengurus = DB::table('pengurus')
         ->where('pengurus.id','=',$id)
        ->get();
        //select * from kategori ^
        return view('pengurus.show', compact('ar_pengurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('pengurus')->where('id',$id)->get();
        return view('pengurus/form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(request()->all(),[
            'nip'=>'required|max:10',
            'nama'=>'required|max:45',
            'alamat'=>'required',
            'tmp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
         ],[
             'nip.required'=>'NIP Wajib untuk diisi',
             'nip.max'=>' NIP ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'alamat.required'=>'alamat Wajib untuk dipilih',
             'tmp_lahir.required'=>'Tempat Lahir Wajib untuk diisi',
             'tgl_lahir.required'=>'Tanggal Lahir Wajib untuk diisi',
              'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
         ])->validate();

        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nip.'.jpg';  
            $request->foto->move(public_path('img'), $fileName);
        }else{
            $fileName = $request->nip.'.jpg';
        }
        DB::table('pengurus')->where('id',$id)->update(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'tmp_lahir'=>$request->tmp_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'foto'=>$fileName,
            ]
        ); 
        return redirect ('/pengurus'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         //ambil isi kolom foto lalu hapus file fotonya 
        //di folder img
        $foto = DB::table('pengurus')->select('foto')
                ->where('id','=',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        File::delete(public_path('img/'.$namaFile));
        //hapus data
        DB::table('pengurus')->where('id',$id)->delete();
        //landing page ke hal pegawai / index.blade.php
        return redirect ('/pengurus');
    }
     public function pengurusPDF()
    {
        $ar_pengurus = DB::table('pengurus')
        ->get();
        $pdf = PDF::loadView('pengurus.pengurusPDF', ['ar_pengurus'=>$ar_pengurus])
               ->setPaper('a4','landscape');
        return $pdf->stream('data_pengurus.pdf');
    }
    public function export() 
    {
        return Excel::download(new PengurusExport, 'data_pengurus.xlsx');
    }
}
