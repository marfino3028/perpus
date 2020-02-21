 <!-- Illustrations -->
 
 <?php $__env->startSection('content'); ?>

             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
      </div>
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
                  <div class="text-left">
                <?php if(!empty(Auth::user()->foto)): ?>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 22rem;" src="<?php echo e(asset('img/user/'.Auth::user()->foto)); ?>"></td>
                <?php else: ?>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 22rem;" src="<?php echo e(asset('img/user/nofoto.png')); ?>" alt="">
                <?php endif; ?>  
                <div class="form-group row">
<div class="col-8">
      <label>&nbsp;&nbsp;NIP/NIS Anda</label>
      <input id="nip_nis" name="nip_nis" type="text" class="form-control"
             value="<?php echo e(Auth::user()->nip_nis); ?>" disabled>
    </div>
  </div>
   <div class="form-group row">
    <div class="col-8">
      <label>&nbsp;&nbsp;Nama Anda</label>
      <input id="nama" name="nama" type="text" class="form-control"
             value="<?php echo e(Auth::user()->name); ?>" disabled>
    </div>
  </div>
   <div class="form-group row">
    <div class="col-8">
      <label>&nbsp;&nbsp;Email Anda</label>
      <input id="nama" name="nama" type="text" class="form-control"
             value="<?php echo e(Auth::user()->email); ?>" disabled/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-8">
      <label>&nbsp;&nbsp;User</label>
      <input id="nama" name="nama" type="text" class="form-control"
             value="<?php echo e(Auth::user()->role); ?>" disabled/>
    </div>
  </div>
  <a href="<?php echo e(route('profile.edit',Auth::user()->id)); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i>&nbsp; Edit</a>&nbsp;&nbsp;<a href="<?php echo e(url('/')); ?>" 
                    ><i class="far fa-hand-point-left">&nbsp;Go Back</i></a> 
    </div>
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/profile/index.blade.php ENDPATH**/ ?>