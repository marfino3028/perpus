@extends('layouts.index')
@section('content')
@php
$ar_pengurus = App\Pengurus::all();
$ar_buku = App\Buku::all();
$ar_jenis = ['a'=>'Cerita Rakyat', 'b'=>'Pendidikan', 'c'=>'Agama', 'd'=>'IT dan Software', 'e'=>'Seni dan Desain','f'=>'Bisnis dan Marketing', 'g'=>'Bahasa','h'=>'Kesehatan'];

@endphp
@foreach ($data as $edit)
<form method="POST" action="{{route('buku.update',$edit->id)}}"
      enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Buku</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Edit Buku</li>
            </ol>
          </div><!-- /.col -->
      </div>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group row">
    <label for="nob" class="col-4 col-form-label">No. Buku</label> 
    <div class="col-8">
      <input id="nob" name="nob" type="text" class="form-control"
             value="{{ $edit->nob }}" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control"
             value="{{ $edit->nama }}" />
    </div>
  </div>
   <div class="form-group row">
    <label for="penerbit" class="col-4 col-form-label">Penerbit</label> 
    <div class="col-8">
      <input id="penerbit" name="penerbit" type="text" class="form-control"
             value="{{ $edit->penerbit }}" />
    </div>
  </div>
   <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Buku</label> 
    <div class="col-8">
      <select name="jenis" class="custom-select">
        <option value="">-- Pilih Jenis Buku --</option>
        @foreach ($ar_jenis as $jenis)
            @php
            $jenisbuku = ($edit->jenis == $jenis) ? 'selected' : '';   
            @endphp
            <option value="{{ $jenis }}" {{ $jenisbuku }} > {{ $jenis }} </option>
        @endforeach
      </select>
    </div>
  </div>
   <!--  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Buku</label> 
    <div class="col-8">
      <input id="jenis" name="jenis" type="text" class="form-control"
             value="{{ $edit->jenis }}" />
    </div>
  </div>  -->
  <div class="form-group row">
    <label for="tgl_terbit" class="col-4 col-form-label">Tanggal Terbit</label> 
    <div class="col-8">
      <input id="tgl_terbit" name="tgl_terbit" type="date" class="form-control"
             value="{{ $edit->tgl_terbit }}" />
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gambar</label> 
    <div class="col-8">
      <input value="{{ $edit->gambar }}" name="gambar" type="file" class="form-control-file">
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4 col-form-label">Penanggung Jawab Buku</label> 
    <div class="col-8">
      <select name="pengurus" class="custom-select">
        <option value="">-- Pilih Penanggung Jawab Buku --</option>
        @foreach ($ar_pengurus as $pengu)
            @php
            $pengurus = ($edit->pengurus_id == $pengu['id']) ? 'selected' : '';   
            @endphp
            <option value="{{ $pengu['id'] }}" {{ $pengurus }} > {{ $pengu['nama'] }} </option>
        @endforeach
      </select>
    </div>
  </div>
<div class="form-group row">
    <label class="col-4">Upload PDF</label> 
    <div class="col-8">
      <input value="{{ $edit->pdf }}" name="pdf" type="file" class="form-control-file">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
      <a href="{{url('/buku')}}" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</div>
</form>
@endforeach
@endsection
