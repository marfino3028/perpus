<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','NIP','Nama','Alamat','Tempat Lahir','Tanggal Lahir','foto','Action']; 
$no = 1; 
?>
<link rel="stylesheet" href="<?php echo e(asset('note/css/bootstrap.css')); ?>">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Pengurus</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   <div class="card">
    <?php if(Auth::user()->role == 'Administrator'): ?>
  <div class="card-header">
    <a href="<?php echo e(route('pengurus.create')); ?>" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah Pengurus</a>
    <a href="<?php echo e(url('pengurus-pdf')); ?>" class="btn btn-danger" target="_blank"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
    <a href="<?php echo e(url('export-pengurus')); ?>" 
  class="btn btn-success btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Excel</a>
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
                  <?php $__currentLoopData = $ar_pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengurus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($pengurus->nip); ?></td>
                  <td><?php echo e($pengurus->nama); ?></td>
                  <td><?php echo e($pengurus->alamat); ?></td>
                  <td><?php echo e($pengurus->tmp_lahir); ?></td>
                  <td><?php echo e($pengurus->tgl_lahir); ?></td>
                   <?php if(!empty($pengurus->foto)): ?>
                <td align="center"><img src="<?php echo e(asset('img')); ?>/<?php echo e($pengurus->foto); ?>" width="140px" height ="120px"></td>
                <?php else: ?>
                <td align="center"><img src="<?php echo e(asset('img')); ?>/nofoto.png" width="140px" height ="120px"></td>
                <?php endif; ?>
                  <td>
                    <form method="POST" action="<?php echo e(route('pengurus.destroy',$pengurus->id)); ?>">
                    <a href="<?php echo e(route('pengurus.show',$pengurus->id)); ?>" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <?php if(Auth::user()->role == 'Administrator'): ?>
                    <a href="<?php echo e(route('pengurus.edit',$pengurus->id)); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
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
        <p>Table diatas merupakan daftar Pengurus yang telah terdaftar menjadi Pengurus Aplikasi Ruang Baca Kami, Daftar Pengurus disini adalah user yang sudah mendaftar/registrasi akun di Aplikasi Ruang Baca Kami sebagai Administrator. Agar User Pengurus bisa terdaftar dalam fitur Pengurus hanya bisa di daftarkan oleh user Administrator Aplikasi Ruang Baca, jadi setelah membuat akun Administrator diharapkan untuk langsung membuat data dirinya di fitur Pengurus.
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/pengurus/index.blade.php ENDPATH**/ ?>