<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url()."assetSA"; ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assetSA"; ?>/vendors/iconfonts/puse-icons-feather/feather.css">
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
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <!-- <?php echo form_open('superAdmin/login', array('id' => 'loginForm')) ?> -->
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                      <input type="text" name="username" id="email" class="form-control" placeholder="Username" />
                      <?php echo form_error('username', '<div class="error">', '</div>') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                      <?php echo form_error('password', '<div class="error">', '</div>') ?>
                  </div>
                </div>
                <div class="form-group">
                  <a href="dashboard"><button class="btn btn-primary submit-btn btn-block">Login</button</a>
                </div>
                <?php if($this->session->flashdata('message')) { ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('message')?>
                    </div>
                <?php } ?>
              <!-- <?php echo form_close(); ?> -->
            </div>
            <!-- <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul> -->
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url()."assetSA"; ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url()."assetSA"; ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url()."assetSA"; ?>/js/off-canvas.js"></script>
  <script src="<?php echo base_url()."assetSA"; ?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url()."assetSA"; ?>/js/misc.js"></script>
  <script src="<?php echo base_url()."assetSA"; ?>/js/settings.js"></script>
  <script src="<?php echo base_url()."assetSA"; ?>/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
