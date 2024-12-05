<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="">
  <meta name="author" content="Phoenixcoded" />
  <!-- Favicon icon -->
  <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
  <!-- vendor css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <style>
    .auth-bg-img {
      background-image: url("<?= base_url() ?>assets/images/green-tea.jpg");
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }

    .auth-bg-img .auth-content {
      padding: 70px 40px;
    }
  </style>
</head>

<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch auth-bg-img">
  <div class="flex-grow-1">
    <div class="h-100 d-md-flex align-items-center auth-side-img">
      <div class="col-sm-10 auth-content w-auto">
        <img src="<?= base_url() ?>assets/images/logo_web.png" alt="" class="img-fluid" style="max-width: 110px;">
        <!-- <h1 class="text-white my-4">Welcome Back!</h1>
        <h4 class="text-white font-weight-normal">Signin to your account and get explore the Able pro Dashboard Template.<br />Do not forget to play with live customizer</h4> -->
      </div>
    </div>
    <div class="auth-side-form">
      <div class=" auth-content">
        <img src="<?= base_url() ?>assets/images/logo_web.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
        <h3 class="mb-4 f-w-400">Login</h3>
        <div class="form-group mb-3">
          <label class="floating-label" for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="">
        </div>
        <div class="form-group mb-4">
          <label class="floating-label" for="password">Password</label>
          <input type="password" class="form-control" name="password" id="Password" placeholder="">
        </div>
        <button class="btn btn-block btn-primary mb-4">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>