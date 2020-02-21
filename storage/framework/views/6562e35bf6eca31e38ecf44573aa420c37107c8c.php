
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('/')); ?>" class="brand-link">
      <img src="<?php echo e(asset('dist/img/logobuku.png')); ?>" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8" >
      <span class="brand-text font-weight-light">Ruang Baca</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if(!empty(Auth::user()->foto)): ?>
          <img src="<?php echo e(asset('img/user/'.Auth::user()->foto)); ?>" class="img-circle elevation-2" alt="User Image">
          <?php else: ?>
          <img src="<?php echo e(asset('img/user/nofoto.png')); ?>" class="img-circle elevation-2" alt="User Image">
          <?php endif; ?>
        </div>
        
        <div class="info">
           <a class="d-block" href="<?php echo e(url('/profile')); ?>"  role="button" ><?php echo e(substr(Auth::user()->name, 0 , 17)); ?></a>
        </div>
        </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('/')); ?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/about')); ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                About
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/buku')); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('/anggota')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/pengurus')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengurus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('logout')); ?>" class="nav-link href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"">
               <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
          </form>
          
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- End Main Sidebar Container --><?php /**PATH C:\xampp2\htdocs\perpus\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>