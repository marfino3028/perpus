 <?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Anggota</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
                      <?php $__currentLoopData = $ar_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $angt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($angt->foto)): ?>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo e(asset('img')); ?>/<?php echo e($angt->foto); ?>"></td>

                <?php else: ?>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo e(asset('img')); ?>/nofoto.png" alt="">
                <?php endif; ?>
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                   
            <tr>
                <td>Nama</td>
                <td><?php echo e($angt->nama); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo e($angt->alamat); ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo e($angt->tmp_lahir); ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo e($angt->tgl_lahir); ?></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><?php echo e($angt->foto); ?></td>
            </tr>
            <tr>
                <td>Buku Favorit</td>
                <td><?php echo e($angt->namabuku); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="<?php echo e(url('/anggota')); ?>" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a></td>
            </tr>
          </tfoot>
          </table>   
          </div>
          </div>
          </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/anggota/show.blade.php ENDPATH**/ ?>