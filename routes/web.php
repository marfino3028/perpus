<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
})->middleware('auth');
Route::get('/about', function () {
    return view('layouts.about');
})->middleware('auth');
Route::resource('/anggota', 'AnggotaController')->middleware('auth');
Route::resource('/buku', 'BukuController')->middleware('auth');
Route::resource('/pengurus', 'PengurusController')->middleware('auth');
Route::resource('/profile', 'ProfileController')->middleware('auth');
Route::resource('/kelola_user', 'KelolaUserController')->middleware('auth');

//pdf dan excel
Route::get('user-pdf','KelolaUserController@userPDF')->middleware('auth');
Route::get('buku-pdf', 'BukuController@bukuPDF')->middleware('auth');
Route::get('pengurus-pdf', 'PengurusController@pengurusPDF')->middleware('auth');
Route::get('anggota-pdf', 'AnggotaController@anggotaPDF')->middleware('auth');


Route::get('export-user','KelolaUserController@export')->name('export')->middleware('auth');
Route::get('export-buku','BukuController@export')->name('export')->middleware('auth');
Route::get('export-pengurus','PengurusController@export')->name('export')->middleware('auth');
Route::get('export-anggota','AnggotaController@export')->name('export')->middleware('auth');



route::get('/clear-cache', function(){
	Artisan::call('cache:clear');
	return "Cache is cleared";
});

Route::get('/afterRegister', function () {
    return view('layouts.afterRegister');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
