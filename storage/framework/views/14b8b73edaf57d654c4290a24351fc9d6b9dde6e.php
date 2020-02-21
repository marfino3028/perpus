<?php $__env->startSection('main'); ?>
<?php
$ar_buku = App\Buku::all();
$ar_judul = ['No','Gambar','Nama','Penerbit','Jenis Buku','Tanggal Terbit','Penanggung Jawab Buku','Action']; 
$no = 1;
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Daftar Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
 <div class="card">
  <div class="card-header">
<a href="<?php echo e(url('buku.create')); ?>" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah Buku</a>

 </div>
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
                 <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <?php if(!empty($buku->gambar)): ?>
                <td><img src="<?php echo e(asset('img')); ?>/<?php echo e($buku->gambar); ?>" width="70px"></td>
                <?php else: ?>
                <td><img src="<?php echo e(asset('img')); ?>/nofoto.png" width="70px"></td>
                <?php endif; ?>
                  <td><?php echo e($buku->nama); ?></td>
                  <td><?php echo e($buku->penerbit); ?></td>
                  <td><?php echo e($buku->jenis); ?></td>
                  <td><?php echo e($buku->tgl_terbit); ?></td>
                  <td><?php echo e($buku->pengurus_id); ?></td>
                  <td>
                    <form method="POST" action="<?php echo e(route('buku.destroy',$buku->id)); ?>">
                    <a href="<?php echo e(route('buku.show',$buku->id)); ?>" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="<?php echo e(route('buku.edit',$buku->id)); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    <a href="<?php echo e(url('/pdf')); ?>" class="btn btn-danger" Target="_blank"><i class="far fa-file-pdf"></i>&nbsp;Review</a>
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

  
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/buku/filter.blade.php ENDPATH**/ ?>