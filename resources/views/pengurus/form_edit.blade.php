@extends('layouts.index')
@section('content')
@php
$ar_pengurus = App\Pengurus::all();
@endphp
@foreach ($data as $edit)
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('pengurus.update',$edit->id)}}"
      enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Pengurus</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Edit Pengurus</li>
            </ol>
          </div><!-- /.col -->
      </div>
    <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
      <input id="nip" name="nip" type="text" class="form-control"
             value="{{ $edit->nip }}" />
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
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
    <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control">{{ $edit->alamat }}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="nama" name="tmp_lahir" type="text" class="form-control" 
             value="{{ $edit->tmp_lahir }}" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="nama" name="tgl_lahir" type="date" class="form-control"
             value="{{ $edit->tgl_lahir }}" />
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
      <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
      <a href="{{url('/pengurus')}}" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</div>
</form>
@endforeach
@endsection
