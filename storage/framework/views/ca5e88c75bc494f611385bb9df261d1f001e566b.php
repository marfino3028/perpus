 <?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Guru</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                  <?php $__currentLoopData = $ar_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
            <tr>
                <td>Nama</td>
                <td><?php echo e($gur->nama); ?></td>
            </tr>
            <tr>
                <td>Mengajar</td>
                <td><?php echo e($gur->pelajaran); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="<?php echo e(url('/guru')); ?>" 
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/guru/show.blade.php ENDPATH**/ ?>