<?php
$ar_judul = ['No','NIP','Nama','Alamat','Tempat Lahir','Tanggal Lahir','foto']; 
$no = 1;    
?>
<h3 align="center">Daftar Buku Ruang Baca | YBM PLN</h3>
<table align="center" width="100%" cellspacing="0" cellpadding="10" border="1">
          <thead>
            <tr>
            <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <th><?php echo e($jdl); ?></th>
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
                <td><img src="img/<?php echo e($pengurus->foto); ?>" width="70px"></td>
                <?php else: ?>
                <td><img src="img/nofoto.png" width="70px"></td>
                <?php endif; ?>
            </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
          </tbody>    
          
        </table><?php /**PATH C:\xampp\htdocs\perpus\resources\views/pengurus/pengurusPDF.blade.php ENDPATH**/ ?>