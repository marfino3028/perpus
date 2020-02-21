<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
use App\Pengurus;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_buku = DB::table('buku')
        ->join('pengurus', 'pengurus.id', '=', 'buku.pengurus_id')
        ->select('buku.*', 'pengurus.nama AS namapengurus')
        ->get();
        //select * from kategori ^
        return view('buku.index', compact('ar_buku'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.form');
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
            'nob'=>'required|unique:buku|max:10',
            'nama'=>'required|max:45',
            'penerbit'=>'required',
            'jenis'=>'required',
            'tgl_terbit'=>'required',
            'gambar' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            'pengurus'=>'required',
            'pdf'=>'file|mimes:pdf',
         ],[
             'nob.required'=>'No. Buku Wajib untuk diisi',
             'nob.unique'=>' No. Buku ini sudah ada',
             'nob.max'=>' No. Buku ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'penerbit.required'=>'Penerbit Wajib untuk diisi',
             'jenis.required'=>'Jenis Buku Wajib untuk diisi',
             'tgl_terbit.required'=>'Tanggal Terbit Wajib untuk diisi',
              'gambar.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'gambar.max' =>'File Foto Melebihi 2048 KB',
             'pengurus.required'=>'Penanggung Jawab Buku Wajib untuk dipilih',
             'pdf.mimes'=>'Ektensi File pdf hanya boleh .pdf',
         ])->validate();


         if(!empty($request->gambar)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'gambar' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nob.'.jpg';  
            $request->gambar->move(public_path('img'), $fileName);
        }else{
            $fileName = '';
        }
        if(!empty($request->pdf)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'pdf' => 'file|mimes:pdf',
            ]);
            $filePdf = $request->nama.'.pdf';  
            $request->pdf->move(public_path('pdf'), $filePdf);
        }else{
            $filePdf = '';
        }
        

        DB::table('buku')->insert(
            [
                
                'nob'=>$request->nob,
                'nama'=>$request->nama,
                'penerbit'=>$request->penerbit,
                'jenis'=>$request->jenis,
                'tgl_terbit'=>$request->tgl_terbit,
                'gambar'=>$fileName,
                'pdf'=>$filePdf,
                'pengurus_id'=>$request->pengurus,
            ]
        );
         return redirect ('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ar_buku = DB::table('buku')
        ->join('pengurus', 'pengurus.id', '=', 'buku.pengurus_id')
        ->select('buku.*', 'pengurus.nama AS namapengurus')
         ->where('buku.id','=',$id) 
        ->get();
        //select * from kategori ^
        return view('buku.show', compact('ar_buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('buku')->where('id',$id)->get();
        return view('buku/form_edit',compact('data'));
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
            'nob'=>'required|max:10',
            'nama'=>'required|max:45',
            'penerbit'=>'required',
            'jenis'=>'required',
            'tgl_terbit'=>'required',
            'gambar' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            'pdf'=>'file|mimes:pdf',
            
         ],[
             'nob.required'=>'No. Buku Wajib untuk diisi',
             'nob.max'=>' No. Buku ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'penerbit.required'=>'Penerbit Wajib untuk diisi',
             'jenis.required'=>'Jenis Buku Wajib untuk diisi',
             'tgl_terbit.required'=>'Tanggal Terbit Wajib untuk diisi',
              'gambar.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'gambar.max' =>'File Foto Melebihi 2048 KB',
             'pdf.mimes'=>'Ektensi File pdf hanya boleh .pdf',
             
         ])->validate();

        if(!empty($request->gambar)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'gambar' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nob.'.jpg';  
            $request->gambar->move(public_path('img'), $fileName);
        }else{
            $fileName = $request->nob.'.jpg';
        }
         if(!empty($request->pdf)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'pdf' => 'file|mimes:pdf',
            ]);
            $filePdf = $request->nama.'.pdf';  
            $request->pdf->move(public_path('pdf'), $filePdf);
        }else{
            $filePdf = '';
        }
           DB::table('buku')->where('id',$id)->update(
            [
                
                'nob'=>$request->nob,
                'nama'=>$request->nama,
                'penerbit'=>$request->penerbit,
                'jenis'=>$request->jenis,
                'tgl_terbit'=>$request->tgl_terbit,
                'gambar'=>$fileName,
                'pdf'=>$filePdf,
                'pengurus_id'=>$request->pengurus,
            ]
        );
        //landing page ke detail pegawai / show.blade.php
        return redirect ('/buku'.'/'.$id);
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
        $foto = DB::table('buku')->select('gambar','pdf')
                ->where('id','=',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->gambar;
            $namaPdf = $f->pdf;
        }
        File::delete(public_path('img/'.$namaFile));
        File::delete(public_path('pdf/'.$namaPdf));
        //hapus data
        DB::table('buku')->where('id',$id)->delete();
        //landing page ke hal pegawai / index.blade.php
        return redirect ('/buku');
    }
     public function bukuPDF()
    {
        $ar_buku = DB::table('buku')
        ->join('pengurus', 'pengurus.id', '=', 'buku.pengurus_id')
        ->select('buku.*', 'pengurus.nama AS namapengurus')
            ->get();
        $pdf = PDF::loadView('buku.bukuPDF', ['ar_buku'=>$ar_buku])
               ->setPaper('a4','landscape');
        return $pdf->stream('daftar-buku.pdf');
    }
    public function export() 
    {
        return Excel::download(new BukuExport, 'daftar_buku.xlsx');
    }
    
}
