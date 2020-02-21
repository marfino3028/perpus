<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UjiBasa | YBM PLN - Login</title>

 <link rel="icon" type="image/png" href="<?php echo e(asset('images/icons/favicon.ico')); ?>"/>
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
        <form method="POST" action="<?php echo e(route('login')); ?>" class="login100-form validate-form">
         <?php echo csrf_field(); ?>
          <span class="login100-form-title p-b-43">
            UjiBasa | YBM PLN Login
          </span>
          <div class="wrap-input100 validate-input" data-validate="Type user name">
            <input id="email" class="input100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email"  autocomplete="email" autofocus>
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
            <?php $__errorArgs = ['email'];
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
          <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" type="password" name="password" autocomplete="current-password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>

           <?php $__errorArgs = ['password'];
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
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
               <?php echo e(__('Login')); ?>

            </button>
          </div>
          <?php if(Route::has('password.request')): ?>
          <a class="txt1" href="<?php echo e(route('password.request')); ?>">
          <?php echo e(__('Forgot Your Password?')); ?>

          </a>
          <?php endif; ?>
          <br>
          <div class="text-center p-t-90">
            <a href="<?php echo e(url('/register')); ?>" class="txt1">
              Create Account
            </a>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
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

</html><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/auth/login.blade.php ENDPATH**/ ?>