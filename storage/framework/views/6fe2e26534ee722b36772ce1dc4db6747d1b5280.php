 <?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Buku</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
                      <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($bu->gambar)): ?>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo e(asset('img')); ?>/<?php echo e($bu->gambar); ?>"></td>

                <?php else: ?>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo e(asset('img')); ?>/nofoto.png" alt="">
                <?php endif; ?>
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                   
            <tr>
                <td>Nama</td>
                <td><?php echo e($bu->nama); ?></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><?php echo e($bu->penerbit); ?></td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td><?php echo e($bu->jenis); ?></td>
            </tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td><?php echo e($bu->tgl_terbit); ?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><?php echo e($bu->gambar); ?></td>
            </tr>
            <tr>
                <td>Penanggung Jawa Buku</td>
                <td><?php echo e($bu->namapengurus); ?></td>
            </tr>
            <tr>
                <td>PDF</td>
                <td><?php echo e($bu->pdf); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="<?php echo e(url('/buku')); ?>" 
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/buku/show.blade.php ENDPATH**/ ?>