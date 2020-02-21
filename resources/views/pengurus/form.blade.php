@extends('layouts.index')
@section('content')
@php
//array scalar
$ar_gender = ['L'=>'Laki-Laki', 'P'=>'Perempuan'];
//ambil master data
$ar_pengurus = App\Pengurus::all();
@endphp
<form method="POST" action="{{route('pengurus.store')}}"
      enctype="multipart/form-data">
  @csrf
    <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Buat Pengurus</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  <div class="form-group row">
        <label class="col-4 col-form-label">NIP</label> 
        <div class="col-8">
          <input name="nip" type="text" 
        class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" />
        @error('nip')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
  </div>  
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pengurus</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" 
      class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
      @error('alamat')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input name="tmp_lahir" type="text" class="form-control @error('tmp_lahir') is-invalid @enderror" value="{{ old('tmp_lahir') }}" />
      @error('tmp_lahir')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}" />
      @error('tgl_lahir')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  
   <div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
    <input value="{{  old('foto') }}" name="foto" type="file" 
       class="form-control-file @error('foto') is-invalid @enderror">@error('foto')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
   </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-primary" 
      value="simpan">Simpan</button>&nbsp;&nbsp;
      <a href="{{url('/pengurus')}}" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</form>
@endsection
