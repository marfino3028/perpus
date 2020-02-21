<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','Nama','Email','Paket','dekskripsi','kkm','tampil','Action']; 
$no = 1; 
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Soal Inggris</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <div class="card">
  <div class="card-header">
<h4 class="breadcrumb-item text-primary">Soal Inggris</h4><p></p>
<a href="<?php echo e(route('soal_inggris.create')); ?>" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah Soal</a>

<a href="<?php echo e(url('user-pdf')); ?>" class="btn btn-danger"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
<a href="<?php echo e(url('export-user')); ?>" 
  class="btn btn-success btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Excel
</a>
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
                  <?php $__currentLoopData = $ar_soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($san->nama); ?></td>
                  <td><?php echo e($san->email); ?></td>
                  <td><?php echo e($san->paket); ?></td>
                  <td><?php echo e($san->deskripsi); ?></td>
                  <td><?php echo e($san->kkm); ?></td>
                  <td><?php echo e($san->tampil); ?></td>
                  <td>
                    <form method="POST" action="">
                    <a href="" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/soal_inggris/index.blade.php ENDPATH**/ ?>