<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_guru = App\Guru::all();
$ar_materi = App\Materi::all();
?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
<form method="POST" action="<?php echo e(route('guru.update',$edit->id)); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
 <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Guru</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?php echo e($edit->nama); ?>" />
    </div>
  </div>

   <div class="form-group row">
    <label class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
      <select name="materi" class="custom-select">
        <option value="">-- Pilih Kategori Kelas --</option>
        <?php $__currentLoopData = $ar_materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $mate = ($edit->materi_id == $mat['id']) ? 'selected' : '';
        ?> 
        <option value="<?php echo e($mat['id']); ?>" <?php echo e($mate); ?>><?php echo e($mat['mapel']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
      <a href="<?php echo e(url('/guru')); ?>" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div> 
</form>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/guru/form_edit.blade.php ENDPATH**/ ?>