<?php include_once('conn/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Guest House Booking System | Deshboard | IIIT Guwahati</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>    
    </ul> 
    <ul class="navbar-nav ml-auto mr-5">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a href="logout.php" role="button"><i class="fas fa-sign-out-alt text-red">Logout</i></a>
                </li>
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Sangeeta </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Deshboard          
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="guest-entry.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
               Guest Entry            
           
              </p>
            </a>           
          </li>
          <li class="nav-item has-treeview">
            <a href="allguest.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              All Guest Status
              </p>
            </a>           
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Rooms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="single-ac.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Single with AC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="single-nonac.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Single without AC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="double-ac.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Double with AC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="double-nonac.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Double without AC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="suite.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suite</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="room-data.php" class="nav-link">
              <i class="nav-icon fas fa-search-plus"></i>
              <p>
                Room Types              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="rooms.php" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Rooms             
              </p>
            </a>
          </li>
          <li class="nav-header">Social Media</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fab fa-facebook-square nav-icon"></i>Facebook           
            </a>
</li>
<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-instagram-square"></i> Instagram          
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-google"></i> Gmail   
            </a>
</li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>