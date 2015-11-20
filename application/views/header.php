<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
<meta name="description" content="<?php echo system_description; ?>">
<meta name="keywords" content="<?php echo system_title; ?>">
<meta name="author" content="<?php echo system_author; ?>">

<link rel="icon" type="image/png" href="<?php echo base_url('assets'); ?>/img/favicon.png">

<title><?php echo system_title . " | " . $judulhalaman; ?></title>

<!-- Bootstrap 3.3.2 -->
<link href="<?php echo base_url('assets'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="<?php echo base_url('assets'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="<?php echo base_url('assets'); ?>/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Chosen -->
<link href="<?php echo base_url('assets'); ?>/plugins/chosen/chosen.min.css" rel="stylesheet" type="text/css" />
<!-- Data Tables -->
<link href="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets'); ?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- Morris charts -->
<link href="<?php echo base_url('assets'); ?>/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link href="<?php echo base_url('assets'); ?>/dist/css/skins/skin-purple.min.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
  
<body class="skin-purple">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo"><b>PPDS</b> PD Unsri</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Date & Time -->
            <li>
                <a id="datetime"> </a>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" class="user-image" alt="User Image"/>
                <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" class="img-rounded" alt="User Image" />
                  <p>
                    <?php echo $this->session->userdata('nama');?>
                    <small><?php echo ucwords($this->session->userdata('tipeuser'));?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <center>
                    <a href="<?php echo base_url('index.php/login/logout'); ?>" class="btn btn-default btn-flat">Log out</a>
                  </center>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
