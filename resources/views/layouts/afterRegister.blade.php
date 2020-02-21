<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link href="{{asset('after/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('after/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
  <title>Selamat Datang</title>
<!-- Font Awesome -->
 

</head>

<body >
        <div class="header">
  <h1>Ruang Baca</h1>
</div>
<div class="w3-main">
  <div class="agile-info">
    <center>
          <img src="{{asset('dist/img/logobuku.png')}}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8" width="220px" ></center>
    <h3>SELAMAT DATANG</h3>
    <p>Selamat Anda Berhasil Registrasi User Baru silahkan untuk mengklik tombol login Untuk Login User yang telah anda buat</p>
    <a class="dropdown-item" href="{{ route('login') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;{{ __('Login') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
  </div>
</div>
<div class="footer-w3l">
  <p>&copy;Ruang Baca YBM PLN</p>
</div>

<!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>