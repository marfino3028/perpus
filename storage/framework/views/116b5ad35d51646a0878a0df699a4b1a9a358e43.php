
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('/')); ?>" class="brand-link">
      <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">UjiBasa</span>
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
           <a class="d-block" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Soal
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1 Soal</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('/soal_inggris')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahasa Inggris</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahasa Arab</p>
                </a>
              </li>
            </ul>
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
                <a href="<?php echo e(url('/santri')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Santri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/guru')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guru</p>
                </a>
              </li>
              <p class="nav-link">----- Data Kelas & Materi -----</p>
              <li class="nav-item">
                <a href="<?php echo e(url('/kelas')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/materi')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Materi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;<?php echo e(__('Logout')); ?></a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
          </li>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- End Main Sidebar Container --><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>