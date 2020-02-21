 
 <?php $__env->startSection('content'); ?>
 <?php
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
 ?>
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
<?php if(Auth::user()->role == 'Administrator'): ?>
		<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo e($buku); ?><sup style="font-size: 13px">&nbsp;Buku</sup></h3>

              <p>Buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-bookmark"></i>
            </div>
            <a href="<?php echo e(url('buku')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo e($anggota); ?><sup style="font-size: 13px">&nbsp;Orang</sup></h3>

              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo e(url('anggota')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($pengurus); ?><sup style="font-size: 13px">&nbsp;Orang</sup></h3>

              <p>Pengurus</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo e(url('pengurus')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo e($users); ?><sup style="font-size: 13px">&nbsp;User</sup></h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo e(url('kelola_user')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
              <h3><?php echo e($user); ?><sup style="font-size: 13px">&nbsp;User</sup></h3>

              <p>User Administrator</p>
            </div>
          </div>
        </div>	
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-pink">
            <div class="inner" align="right">
              <h3><?php echo e($user2); ?><sup style="font-size: 13px">&nbsp;User</sup></h3>

              <p>User Anggota</p>
            </div>
          </div>
        </div>	
    </div>
  <?php endif; ?>
<br><br>
 <?php if(Auth::user()->role == 'Administrator' || Auth::user()->role == 'Anggota'): ?>
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
                     <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukucerita); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukupendidikan); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukuagama); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukuit); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukudesain); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukubisnis); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukubahasa); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($bukukesehatan); ?>

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
                       <i class="fas fa-book"></i>&nbsp;&nbsp;<?php echo e($buku); ?>

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
    <?php endif; ?>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\perpus\resources\views/layouts/home.blade.php ENDPATH**/ ?>