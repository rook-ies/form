
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url()."assetSA"; ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assetSA"; ?>/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url()."assetSA"; ?>/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url()."assetSA"; ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url()."assetSA"; ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?php echo base_url()."assetSA"; ?>/partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo base_url()."assetSA"; ?>/index.html">
          <img src="<?php echo base_url()."assetSA"; ?>/images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url()."assetSA"; ?>/index.html">
          <img src="<?php echo base_url()."assetSA"; ?>/images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Super Admin</span>
              <img class="img-xs rounded-circle" src="<?php echo base_url()."assetSA"; ?>/icon/admin.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="<?php echo base_url(); ?>mockupSuperAdmin" class="dropdown-item">logout</a>            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:<?php echo base_url()."assetSA"; ?>/partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url()."assetSA"; ?>/icon/admin.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Super Admin</p>
                  <div>
                    <small class="designation text-muted">Super Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mockupSuperAdmin/dashboard">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mockupSuperAdmin/admin">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">ADMIN</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mockupSuperAdmin/place">
              <i class="menu-icon mdi mdi-hospital-marker"></i>
              <span class="menu-title">PLACE</span>
            </a>
          </li><li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mockupSuperAdmin/category">
              <i class="menu-icon mdi mdi-google-circles-extended"></i>
              <span class="menu-title">CATEGORY</span>
            </a>
          </li><li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mockupSuperAdmin/type">
              <i class="menu-icon mdi mdi-tag-outline"></i>
              <span class="menu-title">TYPE</span>
            </a>
          </li><li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mockupSuperAdmin/serviceType">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">SERVICE TYPE</span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
