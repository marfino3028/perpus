<?php
$ar_register = App\User::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ruang Baca | YBM PLN - Register</title>

 <link rel="icon" type="image/png" href="<?php echo e(asset('images/icons/logo-perpus.ico')); ?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form method="POST" action="<?php echo e(route('register')); ?>" class="login100-form validate-form">
         <?php echo csrf_field(); ?>
         <span class="login100-form-title p-b-43">
            Ruang Baca | YBM PLN Register
          </span>
          <center>
          <img src="<?php echo e(asset('dist/img/logobuku.png')); ?>" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8" width="160px" ></center>
           <br>
           <br>
           <div class="wrap-input100 validate-input">
            <input id="nip_nis" type="text" class="input100 <?php $__errorArgs = ['nip_nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nip_nis" value="<?php echo e(old('nip_nis')); ?>"  autocomplete="nip_nis" autofocus>
            <span class="focus-input100"></span>
            <span class="label-input100">NIP/NIS</span>
            <?php $__errorArgs = ['nip_nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger center"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <br>
          <div class="wrap-input100 validate-input">
           <input id="name" type="text" class="input100 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>"  autocomplete="name" autofocus>
            <span class="focus-input100"></span>
            <span class="label-input100">Name</span>
          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger center"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <br>
         <div class="wrap-input100 validate-input">
          <input id="email" type="email" class="input100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>"  autocomplete="email">
          <span class="focus-input100"></span>
          <span class="label-input100">Email</span>
         <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p class="alert alert-danger"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>
          <div class="wrap-input100 validate-input">
          <input id="password" type="password" class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"  autocomplete="new-password">
                                <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
            <div class=" validate-input">
            
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="alert alert-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
           </div>
           </div>           
            <br>  
                         <div class="wrap-input100 validate-input">
                        
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation"  autocomplete="new-password">
                                <span class="focus-input100"></span>
            <span class="label-input100">Confirm Password</span>
            </div> 
            <br>   
            <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
               <?php echo e(__('Register')); ?>

            </button>
          </div>
           <div class="text-center p-t-60">
            <a href="<?php echo e(url('/login')); ?>" class="txt1">
              Sign In
            </a>
          </div>
                    </form>
                    <div class="login100-more" style="background-image: url('images/bg-03.jpg');"></div>
                    </div>
    </div>
  </div>

    
</div>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('vendor/daterangepicker/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp2\htdocs\perpus\resources\views/auth/register.blade.php ENDPATH**/ ?>