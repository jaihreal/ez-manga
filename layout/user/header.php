<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EZ Manga</title>

    <!-- Favicon -->
    <link rel="icon" href="./src/logo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./src/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./src/AdminLTE/dist/css/adminlte.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./config/css/global.css">

  </head>
  <body class="hold-transition layout-top-nav">
    <div class="wrapper">
      <nav class="main-header navbar navbar-expand-md navbar-dark bg-dark navbar-white">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand">
            <img src="./src/logo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">EZ Manga</span>
          </a>

          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="news.php" class="nav-link">News</a>
              </li>
              <li class="nav-item">
                <a href="popular.php" class="nav-link">Popular</a>
              </li>
              <li class="nav-item dropdown">
                <!-- <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Browse</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">Some action </a></li>
                  <li><a href="#" class="dropdown-item">Some other action</a></li>
                </ul> -->
                <button class="dropbtn nav-link">Browse 
                  <!-- <i class="fa fa-caret-down"></i> -->
                </button>
                <div class="dropdown-content">
                <div class="header">
                  <h2></h2>
                </div>
              </li>
            </ul>
          </div>
          <!-- Right navbar links -->
          <ul class="order-1 order-md-4 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
              <a class="nav-link disabled float-right" href="#">Guest</a>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-register">
                Register
              </button>
            </li>
            <li class="nav-item ml-2">
              <button type="button" class="nav-link btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-login">
                Login
              </button>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="content">