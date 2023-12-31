<?php
  require_once "../lib/config.php";
  require_once "../lib/lib-db-users.php";
  require_once "lib/lib-db-admin.php";
  require_once "../lib/lib-db-film.php";

  $admin = akunAdminbyUser($_SESSION['admin']);
  $_SESSION['id'] = $admin['id'];
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>F-TIX | Dashboard</title>

  <link rel="stylesheet" href="css/add-admin.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <span class="brand-text font-weight-light">F-TIX dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" data-toggle="modal" data-target="#logout" class="d-block"><?php echo $_SESSION['admin']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-solid fa-user nav-icon"></i>
              <p>Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="add-admin.php" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                        <p>
                            Menambahkan Akun
                        </p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="manage-admin.php" class="nav-link">
                  <i class="fa fa-info nav-icon"></i>
                  <p>Mengatur Akun</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Lokasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="add-lokasi.php" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                        <p>
                            Menambahkan Lokasi
                        </p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="manage-lokasi.php" class="nav-link">
                  <i class="fa fa-info nav-icon"></i>
                  <p>Mengatur Lokasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Studio
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="add-studio.php" class="nav-link">
                      <i class="fa fa-plus nav-icon"></i>
                          <p>
                              Menambahkan Studio
                          </p>
                      </a>
                  </li>
                <li class="nav-item">
                  <a href="manage-studio.php" class="nav-link">
                    <i class="fa fa-info nav-icon"></i>
                    <p>Mengatur Studio</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-film"></i>
                <p>
                  Film
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="add-film.php" class="nav-link">
                      <i class="fa fa-plus nav-icon"></i>
                          <p>
                              Menambahkan Film
                          </p>
                      </a>
                  </li>
                <li class="nav-item">
                  <a href="manage-film.php" class="nav-link">
                    <i class="fa fa-edit nav-icon"></i>
                    <p>Mengatur Film</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-film"></i>
                <p>
                  Jadwal
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a type="button" data-toggle="modal" data-target="#add_shows" class="nav-link">
                      <i class="fa fa-plus nav-icon"></i>
                          <p>
                              Menambahkan Jadwal
                          </p>
                      </a>
                  </li>
                <li class="nav-item">
                  <a href="manage-jadwal.php" class="nav-link">
                    <i class="fa fa-edit nav-icon"></i>
                    <p>Mengatur Jadwal</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="invoice.php" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>
                  Invoice
                </p>
              </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutLabel">Konfirmasi Keluar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="logout.php" method="POST">
                <div class="alert alert-danger">
                    Apakah anda yakin ingin keluar ? 
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Yes</button>
              </div>
          </form>
      </div>
    </div>
</div>

<?php
  require_once "modals/add-jadwal.php";
?>