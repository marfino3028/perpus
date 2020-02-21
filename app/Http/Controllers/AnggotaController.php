<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Anggota;
use App\Buku;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\AnggotaExport;
use Maatwebsite\Excel\Facades\Excel;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ar_anggota = DB::table('anggota')
        ->join('buku', 'buku.id', '=', 'anggota.buku_id')
        ->select('anggota.*', 'buku.nama AS namabuku')
        ->get();
        //select * from kategori ^
        return view('anggota.index', compact('ar_anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.form');
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
            'nis'=>'required|unique:anggota|max:10',
            'nama'=>'required|max:45',
            'alamat'=>'required',
            'tmp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'buku'=>'required',
           'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
         ],[
             'nis.required'=>'NIS Wajib untuk diisi',
             'nis.unique'=>' NIS ini sudah ada',
             'nis.max'=>' NIS ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'alamat.required'=>'alamat Wajib untuk dipilih',
             'tmp_lahir.required'=>'Tempat Lahir Wajib untuk diisi',
             'tgl_lahir.required'=>'Tanggal Lahir Wajib untuk diisi',
             'buku.required'=>'Buku Favorit Wajib untuk dipilih',
           'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
         ])->validate();

         if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nis.'.jpg';  
            $request->foto->move(public_path('img'), $fileName);
        }else{
            $fileName = '';
        }
        DB::table('anggota')->insert(
            [
                'nis'=>$request->nis,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'tmp_lahir'=>$request->tmp_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'buku_id'=>$request->buku,
                'foto'=>$fileName,
            ]
        );
         return redirect ('/anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_anggota = DB::table('anggota')
         ->join('buku', 'buku.id', '=', 'anggota.buku_id')
        ->select('anggota.*', 'buku.nama AS namabuku')
         ->where('anggota.id','=',$id)
        ->get();
        //select * from kategori ^
        return view('anggota.show', compact('ar_anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('anggota')->where('id',$id)->get();
        return view('anggota/form_edit',compact('data'));
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
            'nis'=>'required|max:10',
            'nama'=>'required|max:45',
            'alamat'=>'required',
            'tmp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'buku'=>'required',
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
         ],[
             'nis.required'=>'NIS Wajib untuk diisi',
             'nis.max'=>' NIS ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'alamat.required'=>'alamat Wajib untuk dipilih',
             'tmp_lahir.required'=>'Tempat Lahir Wajib untuk diisi',
             'tgl_lahir.required'=>'Tanggal Lahir Wajib untuk diisi',
             'buku.required'=>'Buku Favorit Wajib untuk dipilih',
             'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
         ])->validate();
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nis.'.jpg';  
            $request->foto->move(public_path('img'), $fileName);
        }else{
            $fileName = $request->nis.'.jpg';
        }
          DB::table('anggota')->where('id',$id)->update(
            [
                'nis'=>$request->nis,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'tmp_lahir'=>$request->tmp_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'foto'=>$fileName,
                'buku_id'=>$request->buku,   
            ]
        );
        //landing page ke detail pegawai / show.blade.php
        return redirect ('/anggota'.'/'.$id);
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
        $foto = DB::table('anggota')->select('foto')
                ->where('id','=',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        File::delete(public_path('img/'.$namaFile));
        //hapus data
        DB::table('anggota')->where('id',$id)->delete();
        //landing page ke hal pegawai / index.blade.php
        return redirect ('/anggota');
    }
     public function anggotaPDF()
    {
         $ar_anggota = DB::table('anggota')
        ->join('buku', 'buku.id', '=', 'anggota.buku_id')
        ->select('anggota.*', 'buku.nama AS namabuku')
        ->get();
        $pdf = PDF::loadView('anggota.anggotaPDF', ['ar_anggota'=>$ar_anggota])
               ->setPaper('a4','landscape');
        return $pdf->stream('data_anggota.pdf');
    }
    public function export() 
    {
        return Excel::download(new AnggotaExport, 'data_anggota.xlsx');
    }
}
