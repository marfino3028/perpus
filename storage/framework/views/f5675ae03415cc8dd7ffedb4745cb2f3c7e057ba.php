<?php $__env->startSection('content'); ?>
<?php
$ar_anggota = App\Anggota::all();
$ar_buku = App\Buku::all();
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
<form method="POST" action="<?php echo e(route('anggota.update',$edit->id)); ?>"
      enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Anggota</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Edit Anggota</li>
            </ol>
          </div><!-- /.col -->
      </div>
    <div class="form-group row">
    <label for="nis" class="col-4 col-form-label">NIS</label> 
    <div class="col-8">
      <input id="nis" name="nis" type="text" class="form-control"
             value="<?php echo e($edit->nis); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control"
             value="<?php echo e($edit->nama); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
    <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"><?php echo e($edit->alamat); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="nama" name="tmp_lahir" type="text" class="form-control" 
             value="<?php echo e($edit->tmp_lahir); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="nama" name="tgl_lahir" type="date" class="form-control"
             value="<?php echo e($edit->tgl_lahir); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Favorit</label> 
    <div class="col-8">
      <select name="buku" class="custom-select">
        <option value="">-- Pilih Buku Favorit --</option>
        <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $buku = ($edit->buku_id == $buk['id']) ? 'selected' : '';   
            ?>
            <option value="<?php echo e($buk['id']); ?>" <?php echo e($buku); ?> > <?php echo e($buk['nama']); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
      <input value="<?php echo e($edit->foto); ?>" name="foto" type="file" class="form-control-file">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
      <a href="<?php echo e(url('/anggota')); ?>" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/anggota/form_edit.blade.php ENDPATH**/ ?>