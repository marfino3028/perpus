<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use PDF;
use App\Exports\KelolaUserExport;
use Maatwebsite\Excel\Facades\Excel;
use Validator,File,Redirect,Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class KelolaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $ar_kelolauser = DB::table('users')
        ->get(); 
        return view('kelola_user.index', compact('ar_kelolauser'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelola_user.form');
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
            'nip_nis' => ['required', 'max:10'],
            'name' => ['required', 'string', 'max:255','min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'],
            'role'=>['required'],
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        ],[
            'nip_nis.required'=>'NIP/NIS Wajib Di Isi',
            'nip_nis.max'=>'NIP/NIS Maximal 10 Angka',
            'name.required'=>'Nama Wajib Di Isi',
            'name.string'=>'Nama Diwajibkan Huruf String',
            'name.min'=>'Nama Minimal 4 Huruf',
            'email.required'=>'Email Wajib Di Isi',
            'password.required'=>'Password Wajib Di Isi',
            'password.min'=>'Password Minimal 8 Suku Kata',
            'password.regex'=>'Password Harus mengandung Huruf Besar, Kecil, Angka Dan Simbol',
            'role.required'=>'Role Wajib Di Isi Kawan',
            'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
        ])->validate();
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nip_nis.'.jpg';  
            $request->foto->move(public_path('img/user'), $fileName);
        }else{
            $fileName = '';
        }
        DB::table('users')->insert(
            [
                'nip_nis'=>$request->nip_nis,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request['password']),
                //'foto'=>$request->foto,
                'role'=>$request->role,
                'foto'=>$fileName,
            ]
        );
        return redirect ('/kelola_user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $ar_kelolauser = DB::table('users')
        ->where('users.id','=',$id)
        ->get();
        return view('kelola_user.show', compact('ar_kelolauser'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataa = DB::table('users')->where('id',$id)->get();
        return view('kelola_user/form_edit',compact('dataa'));
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
            'nip_nis' => ['required', 'max:10'],
            'name' => ['required', 'string', 'max:255','min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'],
            'role'=>['required'],
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        ],[
            'nip_nis.required'=>'NIP/NIS Wajib Di Isi',
            'nip_nis.max'=>'NIP/NIS Maximal 10 Angka',
            'name.required'=>'Nama Wajib Di Isi',
            'name.string'=>'Nama Diwajibkan Huruf String',
            'name.min'=>'Nama Minimal 4 Huruf',
            'email.required'=>'Email Wajib Di Isi',
            'password.required'=>'Password Wajib Di Isi',
            'password.min'=>'Password Minimal 8 Suku Kata',
            'password.regex'=>'Password Harus mengandung Huruf Besar, Kecil, Angka Dan Simbol',
            'role.required'=>'Role Wajib Di Isi Kawan',
            'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
        ])->validate();
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nip_nis.'.jpg';  
            $request->foto->move(public_path('img/user'), $fileName);
        }else{
            $fileName = $request->nip_nis.'.jpg';
        }
        
        
        
        //1.proses ubah data
        DB::table('users')->where('id',$id)->update(
            [
                'nip_nis'=>$request->nip_nis,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request['password']),
                //'foto'=>$request->foto,
                'role'=>$request->role,
                'foto'=>$fileName,
            ]
        );
        //landing page ke detail pegawai / show.blade.php
        return redirect ('/kelola_user'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $foto = DB::table('users')->select('foto')
                ->where('id','=',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        File::delete(public_path('img/user/'.$namaFile));
        //hapus data
        DB::table('users')->where('id',$id)->delete();
        //landing page ke hal pegawai / index.blade.php
        return redirect ('/kelola_user');
    }
    public function userPDF()
    {
        $ar_kelolauser = DB::table('users')
            ->get();
        $pdf = PDF::loadView('kelola_user.userPDF', ['ar_kelolauser'=>$ar_kelolauser])
               ->setPaper('a3','landscape');
        return $pdf->stream('data_user.pdf');
    }
    public function export() 
    {
        return Excel::download(new KelolaUserExport, 'data_user.xlsx');
    }
}
