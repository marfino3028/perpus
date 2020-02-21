<?php
//ambil master data
$ar_guru = App\Guru::all();
$ar_materi = App\Materi::all();
?>
<form method="POST" action="<?php echo e(route('guru.store')); ?>">
  <?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Guru</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="" />
    </div>
  </div>
  
 <div class="form-group row">
    <label class="col-4 col-form-label">Mapel</label> 
    <div class="col-8">
      <select name="materi" class="custom-select">
        <option value="">-- Pilih Kategori Mapel --</option>
        <?php $__currentLoopData = $ar_materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <option value="<?php echo e($kel['id']); ?>"><?php echo e($kel['mapel']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-primary" 
      value="simpan">Simpan</button>
    </div>
  </div>
</form>

<?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/guru/form.blade.php ENDPATH**/ ?>