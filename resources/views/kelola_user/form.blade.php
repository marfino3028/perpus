@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_kelolauser = App\User::all();
$ar_data = ['a'=>'Administrator','b'=>'Anggota'];
@endphp
<form method="POST" action="{{route('kelola_user.store')}}"
      enctype="multipart/form-data">
 @csrf
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Buat User</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Buat User</li>
            </ol>
          </div><!-- /.col -->
      </div>
 <div class="form-group row">
        <label class="col-4 col-form-label">NIP/NIS</label> 
        <div class="col-8">
          <input name="nip_nis" type="text" autocomplete="nip_nis"
        class="form-control @error('nip_nis') is-invalid @enderror" value="{{ old('nip_nis') }}" />
        @error('nip_nis')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div> 
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" type="text" autocomplete="name"
      class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="email" autocomplete="email"
      class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
      @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" type="password" autocomplete="new-password"
      class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" />
      @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Confirm Password</label> 
    <div class="col-8">
      <input id="password" name="password_confirmation" type="password" 
      class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="new-password"/>
      @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Role</label> 
    <div class="col-8">
   <select name="role" class="custom-select @error('role') is-invalid @enderror">
        <option value="">Pilih Kategori User</option>
        @foreach ($ar_data as $dat) 
        <option value="{{ $dat }}">{{ $dat }}</option>
        @endforeach
      </select>
       @error('role')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
    <input value="{{  old('foto') }}" name="foto" type="file" 
       class="form-control-file @error('foto') is-invalid @enderror">
       @error('foto')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror 
    </div>
  </div> 
<div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-primary" 
      value="simpan">Simpan</button>&nbsp;&nbsp;<a href="{{url('/kelola_user')}}" 
                    ><i class="far fa-hand-point-left">&nbsp;Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</div>
</form>
@endsection
