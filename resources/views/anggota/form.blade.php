@extends('layouts.index')
@section('content')
@php
//array scalar
//ambil master data
$ar_buku = App\Buku::all();
$ar_anggota = App\Anggota::all();
@endphp
<form method="POST" action="{{route('anggota.store')}}"
      enctype="multipart/form-data">
  @csrf
    <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Buat Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  <div class="form-group row">
        <label class="col-4 col-form-label">NIS</label> 
        <div class="col-8">
          <input name="nis" type="text" 
        class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}" />
        @error('nis')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
  </div>  
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Anggota</label> 
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
    <label class="col-4 col-form-label">Buku Favorit</label> 
    <div class="col-8">
      <select name="buku" class="custom-select @error('buku') is-invalid @enderror">
        <option value="">-- Pilih Buku Favorit --</option>
        @foreach ($ar_buku as $buk) 
        <option value="{{ $buk['id'] }}" @if (old('buku') == $buk['id']) selected @endif> {{ $buk['nama'] }} </option>
        @endforeach
      </select>
      @error('buku')
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
      <a href="{{url('/anggota')}}" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</form>
@endsection
