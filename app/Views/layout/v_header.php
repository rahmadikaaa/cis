<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>

    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <div class="user-panel mt-3 pb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?= session()->get('nama_user'); ?> //
            <?php if (session()->get('level') == 1) {
              echo 'Admin';
            } else {
              echo 'User';
            } ?>
          </a>
        </div>
      </div>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="container">

        <img src="/template/dist/img/carikost-putih2.png" alt="carikost" class="brand-image  elevation-3 " style="opacity: .8;margin-top: 20px;  ">
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">


            <a href="/" class="nav-link active">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="<?= base_url('login/admin'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
          if (session()->get('level ') == 1) { ?>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-university"></i>
                <p>
                  Property
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: block;">
                <li class="nav-item">
                  <a href="<?= base_url('property/index'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Property List</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php
          }
          ?>


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bookmark"></i>
              <p>
                Booking
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="<?= base_url('/booking'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('booking/add'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Tenant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('booking/extend'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Extend</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('login/logout'); ?>" class="nav-link">
              <i class="nav-icon fa fa-sign "></i>
              <p>
                Logout
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- Sidebar Menu -->
  </aside>