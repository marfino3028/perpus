 <!-- Illustrations -->
 
 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">About</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">UjiBasa</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div><!-- /.col -->
      </div>
              <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Tentang Kami
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        DEMUCA Merupakan sebuah perusahaan yang bergerak di bidang Programming, yang juga merupakan organisasi Developer Bagi para Programmer Indonesia. Perusahaan ini menyediakan layanan untuk perusahaan-perusahaan yang membutuhkan jasa pembuatan Website, Keamanan Website ataupun Mengupgrade Website. DEMUCA memiliki berbagai Karyawan Programmer Profesional yang siap untuk memenuhi permintaan para Clientnya.
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Visi & Misi
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        1. Untuk selalu memberi pelayanan terbaik kepada setiap Customer.<br/>
        2. Memberikan kenyamanan serta keyakinan kepada para Customer untuk selalu menggunakan jasa kami.<br/>
        3. Memajukan serta memberi semangat juang para programmer Indonesia untuk selalu Berkarya.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Sejarah Organisasi
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Berawal dari para Santri Sekolah Programmer Generasi Ke 4 yang di adakan oleh NF Komputer Dan YBM PLN di Cisarua Bogor.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/layouts/about.blade.php ENDPATH**/ ?>