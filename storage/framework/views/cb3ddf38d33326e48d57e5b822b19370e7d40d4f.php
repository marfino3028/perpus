<?php
$ar_judul = ['No','NIP/NIS','Nama','Email','Password','Role','Foto ']; 
$no = 1;    
?>
<h3 align="center">Data User Ruang Baca | YBM PLN</h3>
<table align="center" width="100%" cellspacing="0" cellpadding="10" border="1">
          <thead>
            <tr>
            <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <th><?php echo e($jdl); ?></th>
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
                <td><center><img src="img/user/<?php echo e($user->foto); ?>" width="70px"></center></td>
                <?php else: ?>
                <td><center><img src="img/user/nofoto.png" width="70px"></center></td>
                <?php endif; ?>
            </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
          </tbody>    
          
        </table><?php /**PATH C:\xampp\htdocs\perpus\resources\views/kelola_user/userPDF.blade.php ENDPATH**/ ?>