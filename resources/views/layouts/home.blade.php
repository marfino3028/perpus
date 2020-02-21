 @extends('layouts.index')
 @section('content')
 @php
 $users = DB::table('users')->count('id');
 $buku = DB::table('buku')->count('id');
 $anggota = DB::table('anggota')->count('id');
 $pengurus = DB::table('pengurus')->count('id');
 $user = DB::table('users')->where('role', 'Administrator')->count('id');
 $user2 = DB::table('users')->where('role', 'Anggota')->count('id');
 $bukucerita = DB::table('buku')->where('jenis', 'Cerita Rakyat')->count('id');
 $bukuagama = DB::table('buku')->where('jenis', 'Agama')->count('id');
 $bukubisnis = DB::table('buku')->where('jenis', 'Bisnis dan Marketing')->count('id');
$bukuit = DB::table('buku')->where('jenis', 'IT dan Software')->count('id');
$bukupendidikan = DB::table('buku')->where('jenis', 'Pendidikan')->count('id');
$bukudesain = DB::table('buku')->where('jenis', 'Seni dan Desain')->count('id');
$bukubahasa = DB::table('buku')->where('jenis', 'Bahasa')->count('id');
$bukukesehatan = DB::table('buku')->where('jenis', 'Kesehatan')->count('id');
 @endphp
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      	<div class="row mb-2">
      	<div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
      </div>
@if (Auth::user()->role == 'Administrator')
		<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$buku}}<sup style="font-size: 13px">&nbsp;Buku</sup></h3>

              <p>Buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-bookmark"></i>
            </div>
            <a href="{{url('buku')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$anggota}}<sup style="font-size: 13px">&nbsp;Orang</sup></h3>

              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('anggota')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$pengurus}}<sup style="font-size: 13px">&nbsp;Orang</sup></h3>

              <p>Pengurus</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('pengurus')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$users}}<sup style="font-size: 13px">&nbsp;User</sup></h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('kelola_user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
	</div>
	<br>
	<br>
	<div class="row">
	 <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$user}}<sup style="font-size: 13px">&nbsp;User</sup></h3>

              <p>User Administrator</p>
            </div>
          </div>
        </div>	
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-pink">
            <div class="inner" align="right">
              <h3>{{$user2}}<sup style="font-size: 13px">&nbsp;User</sup></h3>

              <p>User Anggota</p>
            </div>
          </div>
        </div>	
    </div>
  @endif
<br><br>
 @if (Auth::user()->role == 'Administrator' || Auth::user()->role == 'Anggota')
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Daftar Jenis Buku</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                     <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukucerita}}
                    </span>
                    <span class="text-muted">Cerita Rakyat </span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukupendidikan}}
                    </span>
                    <span class="text-muted">Pendidikan</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukuagama}}
                    </span>
                    <span class="text-muted">Agama</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukuit}}
                    </span>
                    <span class="text-muted"> IT dan Software</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukudesain}}
                    </span>
                    <span class="text-muted">Seni dan Desain</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukubisnis}}
                    </span>
                    <span class="text-muted">Bisnis dan Marketing</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukubahasa}}
                    </span>
                    <span class="text-muted">Bahasa</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$bukukesehatan}}
                    </span>
                    <span class="text-muted">Kesehatan</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0">
                  <p class="text-dark text-xl">
                    <i class="fas fa-book"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                       <i class="fas fa-book"></i>&nbsp;&nbsp;{{$buku}}
                    </span>
                    <span class="text-muted">Keseluruhan Jumlah Buku</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
    @endif
</div>
</div>
</div>

@endsection