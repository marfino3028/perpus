<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/about')); ?>" class="nav-link">About</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                <?php if((!empty(Auth::user()->foto))): ?>
                <img class="img-profile rounded-circle" width="30px" height="30px" src="<?php echo e(asset('img/user/'.Auth::user()->foto)); ?>">
                <?php else: ?>
                <img class="img-profile rounded-circle" width="30px" height="30px" src="<?php echo e(asset('img/user/nofoto.png')); ?>">
                <?php endif; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>">
                  <i class="fas fa-user"></i>&nbsp;
                  Profile
                </a>
                <?php if(Auth::user()->role == 'Administrator'): ?>
                <a class="dropdown-item" href="<?php echo e(url('/kelola_user')); ?>">
                  <i class="fas fa-users "></i>&nbsp;
                  Kelola User
                </a>
                <?php endif; ?>
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a> -->
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;<?php echo e(__('Logout')); ?></a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
              </div>
            </li>

          </ul>

  </nav>
  <!-- /.navbar --><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>