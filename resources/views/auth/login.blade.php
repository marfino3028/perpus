<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ruang Baca | YBM PLN - Login</title>

 <link rel="icon" type="image/png" href="{{asset('images/icons/logo-perpus.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
         @csrf
          <span class="login100-form-title p-b-43">
            Ruang Baca | YBM PLN Login
          </span>
          <center>
          <img src="{{asset('dist/img/logobuku.png')}}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8" width="160px" ></center>
           <br>
           <br>
          <div class="wrap-input100 validate-input" data-validate="Type user name">
            <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email"  autocomplete="email" autofocus>
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
            @error('email')
          <div class="alert alert-danger center">{{ $message }}</div>
      @enderror
          </div>
          <br>
          <br>
          <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" autocomplete="current-password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>

           @error('password')
          <div class="alert alert-danger center">{{ $message }}</div>
      @enderror
          </div>
           <br>
           <br>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
               {{ __('Login') }}
            </button>
          </div>
          <div class="text-center p-t-90">
            <a href="{{url('/register')}}" class="txt1">
              Create Account
            </a>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('images/bg-03.jpg');"></div>
      </div>
    </div>
  </div>

    
</div>

  <!--===============================================================================================-->
  <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>