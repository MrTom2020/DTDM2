<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <base href="https://quanlychitieu2030.herokuapp.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php include_once("MVC/view/Quanly/pages/menu/navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo isset($_SESSION['ten']) ? $_SESSION['ten']:"";?></a>
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
      <?php include_once("MVC/view/Quanly/pages/menu/menu.php") ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
            <?php
   echo "<form  action='../Quanlydichvu/capnhatdv' method='POST'>";
    echo "<select class='form-select' name='iddv' aria-label='Default select example'>";
    $dt = isset($data["dsnd"]) ? $data["dsnd"]:NULL;
     while($row = mysqli_fetch_array($dt))
    {
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    echo " <input type='submit' class='form-control'  name='dongycndv' id='dongycndv' value='Đồng ý'>";
    echo "</form>";
 ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Vô hiệu hóa người dùng</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/moment/moment.min.js"></script>
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/js/pages/dashboard.js"></script>
</body>
</html>
