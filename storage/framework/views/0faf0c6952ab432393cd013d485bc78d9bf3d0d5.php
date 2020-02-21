<?php
$ar_judul = ['No','Gambar','Nama Buku','Penerbit','Jenis Buku','Tanggal Terbit','Penanggung Jawab Buku']; 
 
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
        <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <?php if(!empty($buku->gambar)): ?>
                <td><center><img src="img/<?php echo e($buku->gambar); ?>" width="70px"></center></td>
                <?php else: ?>
                <td><center><img src="img/nofoto.png" width="70px"></center></td>
                <?php endif; ?>
                <td><?php echo e($buku->nama); ?></td>
                <td><?php echo e($buku->penerbit); ?></td>
                <td><?php echo e($buku->jenis); ?></td>
                <td><?php echo e($buku->tgl_terbit); ?></td>
                <td><?php echo e($buku->namapengurus); ?></td>
            </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
          </tbody>    
          
        </table><?php /**PATH C:\xampp\htdocs\perpus\resources\views/buku/bukuPDF.blade.php ENDPATH**/ ?>