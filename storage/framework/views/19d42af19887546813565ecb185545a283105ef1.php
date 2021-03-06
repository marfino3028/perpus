<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','NISN','Nama','Tempat Lahir','tanggal Lahir','Kelas','Jenis Sekolah','Action']; 
$no = 1; 
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Santri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Data Santri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <div class="card">
  <div class="card-header">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Santri
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('santri.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
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
                  <?php $__currentLoopData = $ar_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($san->nisn); ?></td>
                  <td><?php echo e($san->nama); ?></td>
                  <td><?php echo e($san->tmp_lahir); ?></td>
                  <td><?php echo e($san->tgl_lahir); ?></td>
                  <td><?php echo e($san->posisi); ?></td>
                  <td><?php echo e($san->tingkatan); ?></td>
                  <td>
                    <form method="POST" action="<?php echo e(route('santri.destroy',$san->id)); ?>">
                    <a href="<?php echo e(route('santri.show',$san->id)); ?>" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="<?php echo e(route('santri.edit',$san->id)); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/santri/index.blade.php ENDPATH**/ ?>