<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_soal = App\Soal::all();
$ar_profile = App\User::all();
$ar_materi = App\Materi::all();
$ar_data = ['a'=>'Bhs. Inggris'];
?>
<form method="POST" action="<?php echo e(route('soal_inggris.store')); ?>"
      enctype="multipart/form-data">
 <?php echo csrf_field(); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Soal Inggris</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Soal Inggris</li>
            </ol>
          </div><!-- /.col -->
      </div>
  <div class="box-body">
     <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-8">
                <input type="name" class="form-control" name="name" placeholder="Nama Anda">
              </div>
            </div>
             <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="Email Anda">
              </div>
            </div>
            <div class="form-group">
              <label for="materi" class="col-sm-2 control-label">Materi</label>
              <div class="col-sm-8">
                <select name="materi" class="custom-select <?php $__errorArgs = ['materi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <option value="">Pilih Kategori Materi</option>
        <?php $__currentLoopData = $ar_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <option value="<?php echo e($mat); ?>"><?php echo e($mat); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
       <?php $__errorArgs = ['materi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="paket" class="col-sm-2 control-label">Paket</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="paket" placeholder="Nama paket">
              </div>
            </div>
            <div class="form-group">
              <label for="paket" class="col-sm-2 control-label">Deskripsi</label>
              <div class="col-sm-8">
                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="kkm" class="col-sm-2 control-label">KKM</label>
              <div class="col-sm-2">
                <input type="text" class="form-control numOnly" data-toggle="tooltip" title="Hanya menerima inputan dalam format numerik" name="kkm" placeholder="KKM">
              </div>
            </div>
<div class="form-group row">
    <div class="col-8">  
      <button name="proses" type="submit" class="btn btn-primary" 
      value="simpan">Simpan</button>&nbsp;&nbsp;<a href="<?php echo e(url('/soal_inggris')); ?>" 
                    ><i class="far fa-hand-point-left">&nbsp;Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</div>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/soal_inggris/form.blade.php ENDPATH**/ ?>