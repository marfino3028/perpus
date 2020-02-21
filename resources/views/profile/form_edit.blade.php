 <!-- Illustrations -->
 @extends('layouts.index')
 @section('content')
 @php
$ar_profile = App\User::all();
@endphp
@foreach ($dataa as $edit)
<form method="POST" action="{{route('profile.update',$edit->id)}}"
      enctype="multipart/form-data">
  @csrf
  @method('PUT')
             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Profile</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div><!-- /.col -->
      </div>
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
    <div class="form-group row">
      <div class="col-4">
        @if(!empty(Auth::user()->foto))
                <img class="img-fluid px-7 px-sm--2 mt-3 mb-4" style="width: 32rem; " src="{{asset('img/user/'.Auth::user()->foto)}}"></td>
                @else
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 32rem;" src="{{asset('img/user/nofoto.png')}}" alt="">
                @endif 
         <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file">
        </div>
      <div class="col-8">
      <label>&nbsp;&nbsp;NIP/NIS Anda</label>
      <input id="nip_nis" name="nip_nis" type="text" class="form-control  @error('nip_nis') is-invalid @enderror"
             value="{{$edit->nip_nis}}">
             @error('nip_nis')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
      <label>&nbsp;&nbsp;Nama Anda</label>
      <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
             value="{{$edit->name}}">
              @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
      <label>&nbsp;&nbsp;Email Anda</label>
      <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"
             value="{{ $edit->email }}"/>
              @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
      <label>&nbsp;&nbsp;Password</label>
      <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"value=""/>
      @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  </div>
</div>
   <div class="form-group row">
    <div class="col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
  <a href="{{url('/profile')}}" 
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