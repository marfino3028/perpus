<div class="col-md-4">
  <div class="list-group">
    <div class="list-group-item bg-info text-light">
      <h4 class="mb-1">Kategori</h4>
    </div>
    <div class="list-group-item">
      <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="list-group">
        <form method="get" action="<?php echo e(url('filter')); ?>">
             <input type="hidden" name="cat" value="<?php echo e($buku->id); ?>">
             <button class="list-group-item list-group-item-action" type="submit"><?php echo e($buku->jenis); ?></button>
        </form>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="list-group-item justify-content-between bg-info text-light">
      Help <span class="badge badge-secondary badge-pill"><?php echo e(count($ar_buku)); ?></span>
    </div>
  </div>
</div>
</div>
</div><?php /**PATH C:\xampp\htdocs\perpus\resources\views/buku/sidebar.blade.php ENDPATH**/ ?>