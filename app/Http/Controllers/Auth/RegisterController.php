<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ='/afterRegister';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nip_nis' => ['required', 'max:10'],
            'name' => ['required', 'string', 'max:255','min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'],
        ],[
            'nip_nis.required'=>'NIP/NIS Wajib Di Isi',
            'nip_nis.max'=>'NIP/NIS Maximal 10 Angka',
            'name.required'=>'Nama Wajib Di Isi',
            'name.string'=>'Nama Diwajibkan Huruf String',
            'name.min'=>'Nama Minimal 4 Huruf',
            'email.required'=>'Email Wajib Di Isi',
            'email.unique'=>'Email Sudah Ada Yang Punya',
            'password.required'=>'Password Wajib Di Isi',
            'password.min'=>'Password Minimal 8 Suku Kata',
            'password.regex'=>'Password Harus mengandung Huruf Besar, Kecil, Angka Dan Simbol',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nip_nis'=>$data['nip_nis'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
