 <!-- Illustrations -->
 @extends('layouts.index')
 @section('content')
 @php
$ar_kelolauser = App\User::all();
$ar_role = ['a'=>'Administrator', 'b'=>'Anggota'];
@endphp
@foreach ($dataa as $edit)
<form method="POST" action="{{route('kelola_user.update',$edit->id)}}"
      enctype="multipart/form-data">
  @csrf
  @method('PUT')
             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Kelola User</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Edit Kelola User</li>
            </ol>
          </div><!-- /.col -->
      </div>
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Kelola User</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
    <div class="form-group row">
      <div class="col-8">
      <label>&nbsp;&nbsp;NIP/NIS Anda</label>
      <input id="nip_nis" name="nip_nis" type="text" class="form-control  @error('nip_nis') is-invalid @enderror"
             value="{{$edit->nip_nis}}">
             @error('nip_nis')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>
    <div class="form-group row">
    <div class="col-8">
      <label>&nbsp;&nbsp;Nama Anda</label>
      <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
             value="{{$edit->name}}">
              @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>
   <div class="form-group row">
    <div class="col-8">
      <label>&nbsp;&nbsp;Email Anda</label>
      <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"
             value="{{ $edit->email }}"/>
              @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
  </div>
   <div class="form-group row">
    <div class="col-8">
    <label>&nbsp;&nbsp;Role User</label>
   <select name="role" class="custom-select">
        <option value="">Pilih Kategori User</option>
        @foreach ($ar_role as $roles) 
        @php
        $rol =  ($edit->role == $roles) ? 'selected' : '';
        @endphp
        <option value="{{ $roles }}" {{$rol}}>{{ $roles }}</option>
        @endforeach
      </select>
       @error('role')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
</div>
  <div class="form-group row">
    <div class="col-8">
      <label>&nbsp;&nbsp;Password</label>
      <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"value=""/>
      @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  </div>
  </div>
  <div class="form-group row"> 
    <div class="col-8">
      <label>&nbsp;&nbsp;Foto</label>
      <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file" placeholder="Password">
    </div>
  </div> 
   <div class="form-group row">
    <div class="col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
  <a href="{{url('/kelola_user')}}" 
                    ><i class="far fa-hand-point-left">&nbsp;Go Back</i></a> 
    </div>
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
@endforeach
@endsection