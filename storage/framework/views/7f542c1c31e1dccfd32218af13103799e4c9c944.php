<?php
//ambil master data
$ar_kelas2 = ['a'=>'SMK', 'b'=>'SMP'];
$ar_kelas3 = ['1'=>'TKJ', '2'=>'RPL'];
$ar_santri = App\Santri::all();
$ar_kelas = App\Kelas::all();
?>
<form method="POST" action="<?php echo e(route('santri.store')); ?>">
  <?php echo csrf_field(); ?>
  <div class="form-group row">
        <label for="nisn" class="col-4 col-form-label">NISN</label> 
        <div class="col-8">
          <input name="nisn" type="text" class="form-control"  value="" />
       </div>
  </div>  
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Santri</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="" />
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input name="tempat" type="text" class="form-control" required="required" value="" />
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input name="tanggal" type="date" class="form-control" required="required" value="" />
    </div>
  </div>
   <div class="form-group row">
    <label class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
      <select name="kelas" class="custom-select">
        <option value="">-- Pilih Kategori Kelas --</option>
        <?php $__currentLoopData = $ar_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <option value="<?php echo e($kel['id']); ?>"><?php echo e($kel['nama']); ?></option>
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
      <?php $__currentLoopData = $ar_kelas2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" value="$k" />
        <label class="form-check-label"><?php echo e($kelas); ?></label>
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
      <?php $__currentLoopData = $ar_kelas3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hg => $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ng" value="$hg" />
        <label class="form-check-label"><?php echo e($jurusan); ?></label>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-primary" 
      value="simpan">Simpan</button>
    </div>
  </div>
</form>

<?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/santri/form.blade.php ENDPATH**/ ?>