 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url()?>public/dist/img/unsrat.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HAKI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!--menu Home-->
           <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <!--/menu Home-->
          <!--menu HAKI-->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-certificate"></i>
              <p>
                HAKI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard HAKI</p>
                </a>
              </li>
              <!--/menu HAKI-->
              <li class="nav-item">
                <a href="<?= base_url(); ?>Pengajuan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan</p>
                </a>
              </li>
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Home/pengajuan" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Refrensi</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!--menu User-->
          <li class="nav-item">
                <a href="<?php echo base_url()?>Home/pengajuan" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>user</p>
                </a>
              </li>
            </ul>
          </li>
         <li class="nav-item menu-open">
          </li>
         <!--/menu user-->
         <!--menu keluar-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
