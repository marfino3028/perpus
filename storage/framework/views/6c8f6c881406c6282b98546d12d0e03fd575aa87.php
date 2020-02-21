<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','NIP/NIS','Nama','Email','Password','Role','Foto ','Action']; 
$no = 1; 
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <?php if(Auth::user()->role == 'Administrator'): ?>
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1>Kelola User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Kelola User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <div class="card">
  <div class="card-header">
<a href="<?php echo e(route('kelola_user.create')); ?>" class="btn btn-primary"><i class="fas fa-plus">&nbsp;</i>Tambah User</a>

<a href="<?php echo e(url('user-pdf')); ?>" class="btn btn-danger" Target="_blank"><i class="far fa-file-pdf"></i>&nbsp;PDF</a>
<a href="<?php echo e(url('export-user')); ?>" 
  class="btn btn-success btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Excel
</a>


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
                  <?php $__currentLoopData = $ar_kelolauser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($user->nip_nis); ?></td>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->password); ?></td>
                  <td><?php echo e($user->role); ?></td>
                  <?php if(!empty($user->foto)): ?>
                <td><img src="<?php echo e(asset('img/user')); ?>/<?php echo e($user->foto); ?>" width="70px"></td>
                <?php else: ?>
                <td><img src="<?php echo e(asset('img/user')); ?>/nofoto.png" width="70px"></td>
                <?php endif; ?>
                  <td>
                    <form method="POST" action="<?php echo e(route('kelola_user.destroy',$user->id)); ?>">
                    <a href="<?php echo e(route('kelola_user.show',$user->id)); ?>" class="btn btn-success"><i class="far fa-eye"></i></a>
                    <a href="<?php echo e(route('kelola_user.edit',$user->id)); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a> 
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-eraser"></i></button>
                    </form>
                </td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <?php else: ?>
<?php echo $__env->make('layouts.terlarang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/kelola_user/index.blade.php ENDPATH**/ ?>