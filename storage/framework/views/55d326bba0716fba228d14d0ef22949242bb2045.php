<?php $__env->startSection('content'); ?>
<?php
$ar_pengurus = App\Pengurus::all();
$ar_buku = App\Buku::all();
$ar_jenis = ['a'=>'Cerita Rakyat', 'b'=>'Pendidikan', 'c'=>'Agama', 'd'=>'IT dan Software', 'e'=>'Seni dan Desain','f'=>'Bisnis dan Marketing', 'g'=>'Bahasa','h'=>'Kesehatan'];

?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="POST" action="<?php echo e(route('buku.update',$edit->id)); ?>"
      enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Buku</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Edit Buku</li>
            </ol>
          </div><!-- /.col -->
      </div>
      <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <div class="form-group row">
    <label for="nob" class="col-4 col-form-label">No. Buku</label> 
    <div class="col-8">
      <input id="nob" name="nob" type="text" class="form-control"
             value="<?php echo e($edit->nob); ?>" />
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
    <label for="penerbit" class="col-4 col-form-label">Penerbit</label> 
    <div class="col-8">
      <input id="penerbit" name="penerbit" type="text" class="form-control"
             value="<?php echo e($edit->penerbit); ?>" />
    </div>
  </div>
   <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Buku</label> 
    <div class="col-8">
      <select name="jenis" class="custom-select">
        <option value="">-- Pilih Jenis Buku --</option>
        <?php $__currentLoopData = $ar_jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $jenisbuku = ($edit->jenis == $jenis) ? 'selected' : '';   
            ?>
            <option value="<?php echo e($jenis); ?>" <?php echo e($jenisbuku); ?> > <?php echo e($jenis); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>
   <!--  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Buku</label> 
    <div class="col-8">
      <input id="jenis" name="jenis" type="text" class="form-control"
             value="<?php echo e($edit->jenis); ?>" />
    </div>
  </div>  -->
  <div class="form-group row">
    <label for="tgl_terbit" class="col-4 col-form-label">Tanggal Terbit</label> 
    <div class="col-8">
      <input id="tgl_terbit" name="tgl_terbit" type="date" class="form-control"
             value="<?php echo e($edit->tgl_terbit); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gambar</label> 
    <div class="col-8">
      <input value="<?php echo e($edit->gambar); ?>" name="gambar" type="file" class="form-control-file">
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4 col-form-label">Penanggung Jawab Buku</label> 
    <div class="col-8">
      <select name="pengurus" class="custom-select">
        <option value="">-- Pilih Penanggung Jawab Buku --</option>
        <?php $__currentLoopData = $ar_pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $pengurus = ($edit->pengurus_id == $pengu['id']) ? 'selected' : '';   
            ?>
            <option value="<?php echo e($pengu['id']); ?>" <?php echo e($pengurus); ?> > <?php echo e($pengu['nama']); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>
<div class="form-group row">
    <label class="col-4">Upload PDF</label> 
    <div class="col-8">
      <input value="<?php echo e($edit->pdf); ?>" name="pdf" type="file" class="form-control-file">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
      <a href="<?php echo e(url('/buku')); ?>" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div>
</div>
</div>
</div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/buku/form_edit.blade.php ENDPATH**/ ?>