<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/about')}}" class="nav-link">About</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ substr(Auth::user()->name, 0 , 17) }}</span>
                @if((!empty(Auth::user()->foto)))
                <img class="img-profile rounded-circle" width="30px" height="30px" src="{{asset('img/user/'.Auth::user()->foto)}}">
                @else
                <img class="img-profile rounded-circle" width="30px" height="30px" src="{{asset('img/user/nofoto.png')}}">
                @endif
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{url('/profile')}}">
                  <i class="fas fa-user"></i>&nbsp;
                  Profile
                </a>
                @if (Auth::user()->role == 'Administrator')
                <a class="dropdown-item" href="{{url('/kelola_user')}}">
                  <i class="fas fa-users "></i>&nbsp;
                  Kelola User
                </a>
                @endif
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a> -->
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;{{ __('Logout') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </div>
            </li>

          </ul>

  </nav>
  <!-- /.navbar -->