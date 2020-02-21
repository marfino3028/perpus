 <!-- Illustrations -->
 @extends('layouts.index')
 @section('content')
<link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="{{asset('note/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('note/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('note/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('note/css/jquery-ui.css')}}">        
      <link rel="stylesheet" href="{{asset('note/css/nice-select.css')}}">              
      <link rel="stylesheet" href="{{asset('note/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('note/css/owl.carousel.css')}}">       
 
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
              <li class="breadcrumb-item"><a href="#">Ruang Baca</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
      </div>
                
      <!-- start banner Area -->
      <br>
      <br>
      <div class="p-3 mb-2 bg-light text-gray-dark">
              <br>
              <br>
              <br>
      <section class="banner-area">
        <div class="container">
          <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
              <h6>This is me</h6>
              <h1>{{Auth::user()->name}}<br><sup>{{Auth::user()->role}}</sup></h1>
              <p>
               NIP/NIS : {{Auth::user()->nip_nis}}<br>
               Email : {{Auth::user()->email}}
              </p>
              <a href="{{route('profile.edit',Auth::user()->id)}}" class="btn btn-warning" style="text-decoration: none;"><i class="fas fa-pen-alt"></i>&nbsp;Edit Profile</a> 
            </div>
            <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
              @if(!empty(Auth::user()->foto))
                <img class="img-fluid" src="{{asset('img/user/'.Auth::user()->foto)}}"></td>
                @else
                <img class="img-fluid" src="{{asset('img/user/nofoto.png')}}" alt="">
                @endif  
            </div>
          </div>
        </div>          
      </section>
      <br>
      <br>
      <br>
</div>
</div>
      <!-- End banner Area -->
                
          </div>
        </div>
      </div>
    </form>
@endsection