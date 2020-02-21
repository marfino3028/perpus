<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','NIS','Nama','Alamat','Tempat Lahir','Tanggal Lahir','foto','Buku Favorit','Action']; 
$no = 1; 
?>
<link rel="stylesheet" href="<?php echo e(asset('note/css/bootstrap.css')); ?>">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <div class="card">
  <?php if(Auth::user()->role == 'Administrator'): ?>
  <div class="card-header">
    <a href="<?php echo e(route('anggota.create')); ?>" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah Anggota</a>
    <a href="<?php echo e(url('anggota-pdf')); ?>" class="btn btn-danger" target="_blank"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
    <a href="<?php echo e(url('export-anggota')); ?>" 
  class="btn btn-success btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Excel
</a>
  </div>
  <?php endif; ?>
    <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $judul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <th><?php echo e($judul); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $ar_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($anggota->nis); ?></td>
                  <td><?php echo e($anggota->nama); ?></td>
                  <td><?php echo e($anggota->alamat); ?></td>
                  <td><?php echo e($anggota->tmp_lahir); ?></td>
                  <td><?php echo e($anggota->tgl_lahir); ?></td>
                   <?php if(!empty($anggota->foto)): ?>
                <td><img src="<?php echo e(asset('img')); ?>/<?php echo e($anggota->foto); ?>" width="70px" height="70px"></td>
                <?php else: ?>
                <td><img src="<?php echo e(asset('img')); ?>/nofoto.png" width="70px"></td>
                <?php endif; ?>
                  <td><?php echo e($anggota->namabuku); ?></td>
                  <td>
                    <form method="POST" action="<?php echo e(route('anggota.destroy',$anggota->id)); ?>">
                    <a href="<?php echo e(route('anggota.show',$anggota->id)); ?>" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="<?php echo e(route('anggota.edit',$anggota->id)); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    <?php if(Auth::user()->role == 'Administrator'): ?>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    <?php endif; ?>
                    </form>
                </td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
           <div class="col-md-12">
                  <div class="box-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert"><b>
<i class="fa fa-info-circle ">&nbsp;</i>Informasi</b>
        <p></p>
        <p>Table diatas merupakan daftar Anggota yang telah terdaftar menjadi Anggota Aplikasi Ruang Baca Kami, Daftar Anggota disini adalah user yang sudah mendaftar/registrasi akun di Aplikasi Ruang Baca Kami sebagai Anggota. Agar User Anggota bisa terdaftar dalam fitur Anggota hanya bisa di daftarkan oleh Administrator Aplikasi Ruang Baca, Jadi setelah mendaftar akun ke Aplikasi Ruang Baca setiap User Anggota disarankan untuk menghubungi Admin yang bisa dihubungi agar dapat terdaftar dalam fitur Daftar Anggota.
        </p>
      </div>
    </div>
  </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/anggota/index.blade.php ENDPATH**/ ?>