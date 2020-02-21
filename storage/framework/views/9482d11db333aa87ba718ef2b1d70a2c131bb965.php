 <?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Show Santri</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
            <table  width="60%" cellpadding="10" cellspacing="0">
              <tbody>
                  <?php $__currentLoopData = $ar_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
            <tr>
                <td>NIP</td>
                <td><?php echo e($san->nisn); ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo e($san->nama); ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo e($san->tmp_lahir); ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo e($san->tgl_lahir); ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?php echo e($san->posisi); ?></td>
            </tr>
            <tr>
                <td>Jenis Sekolah</td>
                <td><?php echo e($san->tingkatan); ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?php echo e($san->jenis); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </tbody>

          <tfoot>
            <tr>
              <td> <a href="<?php echo e(url('/santri')); ?>" 
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/santri/show.blade.php ENDPATH**/ ?>