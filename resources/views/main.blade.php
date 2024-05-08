<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title-page')</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
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
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.js">
</head>
<body>
  @include('layout.banner')
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layout.partialnav')
    @include('layout.partial')
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      @include('layout.partialset')
      <!-- partial:partials/_sidebar.html -->
      @include('layout.sidebar')
      <!-- partial content -->
      <div class="main-panel">
        <div style="margin-right: 1cm ; margin-left: 1cm ; margin-top: -37px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              <h1>@yield('page-title')</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li> --}}
                @yield('page-breadcrumb')
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          @yield('page-content')
        </section>
          <!-- /.content -->
      </div>
    <!-- main-panel ends -->
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

