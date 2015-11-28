<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <meta name="description" content="<?php echo system_description; ?>">
    <meta name="keywords" content="<?php echo system_title; ?>">
    <meta name="author" content="<?php echo system_author; ?>">

    <link rel="icon" type="image/png" href="<?php echo base_url('assets'); ?>/img/favicon.png">

    <title><?php echo system_title; ?> | Admin Log In</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url('assets'); ?>/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-purple">
    <div class="login-box">
      <div class="login-logo">
        <img src="<?php echo base_url('assets'); ?>/img/logo-unsri.png" width="75"/>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <?php if(!$this->session->flashdata('login')): ?>
        <p class="login-box-msg">Selamat datang di<br><b><?php echo system_name; ?></b></p>
        <?php else: ?>
          <p class="login-box-msg text-red"><?php echo $this->session->flashdata('login');?></p>
        <?php endif; ?>
        <form action="<?php echo base_url('index.php/login/authentication'); ?>" method="POST">
          <div class="form-group has-feedback">
            <input name="username" type="text" class="form-control" placeholder="Username" required/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <br>

        <center><?php echo system_author; ?> &copy; <?php echo date('Y'); ?> - <?php echo system_title; ?> version <?php echo system_version; ?></center>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets'); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets'); ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>