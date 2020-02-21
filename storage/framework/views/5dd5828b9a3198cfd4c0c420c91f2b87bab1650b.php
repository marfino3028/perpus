<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_kel = ['1'=>'SMK', '2'=>'SMP'];
$ar_jur = ['3'=>'TKJ', '4'=>'RPL'];
$ar_santri = App\Santri::all();
$ar_kelas = App\Kelas::all();
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
<form method="POST" action="<?php echo e(route('santri.update',$edit->id)); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
 <div class="form-group row">
        <label for="nisn" class="col-4 col-form-label">NISN</label> 
        <div class="col-8">
          <input name="nisn" type="text" class="form-control"  value="<?php echo e($edit->nisn); ?>" />
       </div>
  </div>  
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Santri</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?php echo e($edit->nama); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input name="tempat" type="text" class="form-control" required="required" value="<?php echo e($edit->tmp_lahir); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input name="tanggal" type="date" class="form-control" required="required" value="<?php echo e($edit->tgl_lahir); ?>" />
    </div>
  </div>
   <div class="form-group row">
    <label class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
      <select name="kelas" class="custom-select">
        <option value="">-- Pilih Kategori Kelas --</option>
        <?php $__currentLoopData = $ar_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $ke = ($edit->kelas_id == $kel['id']) ? 'selected' : '';
        ?> 
        <option value="<?php echo e($kel['id']); ?>" <?php echo e($ke); ?>><?php echo e($kel['nama']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Jenis Sekolah</label> 
    <div class="col-8">
      <?php
      $no = 0;
      ?>
      <?php $__currentLoopData = $ar_kel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nj => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $del = ($edit->kelas_id['kategori'] == $nj) ? 'checked' : '';
      ?>  
      <div class="form-check form-check-inline">
        <input class="form-check-input"  type="radio" name="jk" value="<?php echo e($nj); ?>" <?php echo e($del); ?> />
        <label class="form-check-label"><?php echo e($val); ?></label>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Jurusan</label> 
    <div class="col-8">
      <?php
      $no = 0;
      ?>
      <?php $__currentLoopData = $ar_jur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ui => $lol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $los = ($edit->kelas_id['jurusan'] == $ui) ? 'checked' : '';
      ?>  
      <div class="form-check form-check-inline">
        <input class="form-check-input"  type="radio" name="lp" value="<?php echo e($ui); ?>" <?php echo e($los); ?> />
        <label class="form-check-label"><?php echo e($lol); ?></label>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>&nbsp;&nbsp;
      <a href="<?php echo e(url('/santri')); ?>" 
                    ><i class="far fa-hand-point-left"> Go Back</i></a> 
    </div>
  </div> 
</form>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/santri/form_edit.blade.php ENDPATH**/ ?>