@extends('layouts.index')
@section('content')
@php
$ar_buku = App\Buku::all();
$ar_pengurus = App\Pengurus::all();
$ar_jenis = ['a'=>'Cerita Rakyat', 'b'=>'Pendidikan', 'c'=>'Agama', 'd'=>'IT dan Software', 'e'=>'Seni dan Desain','f'=>'Bisnis dan Marketing', 'g'=>'Bahasa','h'=>'Kesehatan'];
@endphp
<form method="POST" action="{{route('buku.store')}}"
      enctype="multipart/form-data">
  @csrf
    <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambahkan Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Tambahkan Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  <div class="form-group row">
        <label class="col-4 col-form-label">No. Buku</label> 
        <div class="col-8">
          <input name="nob" type="text" 
        class="form-control @error('nob') is-invalid @enderror" value="{{ old('nob') }}" />
        @error('nob')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
  </div>  
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Buku</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" 
      class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-4 col-form-label">Penerbit</label> 
    <div class="col-8">
    <input id="penerbit" name="penerbit" type="text" 
      class="form-control @error('penerbit') is-invalid @enderror" value="{{ old('penerbit') }}" />
      @error('penerbit')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Buku</label> 
    <div class="col-8">
      <select name="jenis" class="custom-select @error('jenis') is-invalid @enderror">
        <option value="">-- Pilih Jenis Buku --</option>
        @foreach ($ar_jenis as $jenis) 
        <option value="{{ $jenis }}" @if (old('jenis') == $jenis) selected @endif> {{ $jenis }} </option>
        @endforeach
      </select>
      @error('jenis')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_terbit" class="col-4 col-form-label">Tanggal Terbit</label> 
    <div class="col-8">
      <input name="tgl_terbit" type="date" class="form-control @error('tgl_terbit') is-invalid @enderror" value="{{ old('tgl_terbit') }}" />
      @error('tgl_terbit')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>

   <div class="form-group row">
    <label class="col-4">Gambar</label> 
    <div class="col-8">
    <input value="{{  old('gambar') }}" name="gambar" type="file" 
       class="form-control-file @error('gambar') is-invalid @enderror">@error('gambar')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
   </div>
<div class="form-group row">
    <label class="col-4 col-form-label">Penanggung Jawab Buku</label> 
    <div class="col-8">
      <select name="pengurus" class="custom-select @error('pengurus') is-invalid @enderror">
        <option value="">-- Pilih Penanggung Jawab Buku --</option>
        @foreach ($ar_pengurus as $pengurus) 
        <option value="{{ $pengurus['id'] }}" @if (old('pengurus') == $pengurus['id']) selected @endif> {{ $pengurus['nama'] }} </option>
        @endforeach
      </select>
      @error('pengurus')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
   <div class="form-group row">
    <label class="col-4">Upload Pdf</label> 
    <div class="col-8">
    <input value="{{  old('pdf') }}" name="pdf" type="file" 
       class="form-control-file @error('pdf') is-invalid @enderror">@error('pdf')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
   </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-primary" 
      value="simpan">Simpan</button>&nbsp;&nbsp;
      <a href="{{url('/buku')}}" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</form>
@endsection
