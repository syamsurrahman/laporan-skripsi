<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/dist/css/adminlte.min.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url ()?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"> <img src="<?= base_url() ?>assets/dist/img/logo.png" alt="Logo Puskesmas" height="180" width="200"></a>
      <center><h4><B>PUSKESMAS KELAYAN DALAM</B></h4></center>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Login!</p>

        <form action="<?php echo base_url('auth/auth') ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('/assets/dist/js/adminlte.min.js') ?>"></script>
  <!-- SweetAlert2 -->
  <script src="<?= base_url() ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
      });
      <?php echo $this->session->flashdata('notif') ?>
    });
  </script>
</body>

</html>