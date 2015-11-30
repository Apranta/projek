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
<!-- Theme style -->
<link href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link href="<?php echo base_url('assets'); ?>/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>  

<body onload="window.print();">
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- Title row -->
      <div class="row">
        <div class="col-xs-12">
          <center>
            <img src="<?php echo base_url('assets/img/logo-rsup.png'); ?>" width="60"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('assets/img/logo-unsri.png'); ?>" width="60"/>
            <h4><b>DEPARTEMEN RESIDEN ANESTESIOLOGI DAN TERAPI INSENTIF</b></h4>
            <h5><b>RSUP Dr. MOHAMMAD HOESIN / FAKULTAS KEDOKTERAN UNIVERSITAS SRIWIJAYA</b></h5>
            Jl. Jenderal Sudirman Km 3.5 Palembang 30126 Telp. (0711) 354088 - 311466 Ext. 304
          </center>
        </div>
      </div>

      <br>
      <br>
      <div class="row">
        <div class="col-xs-2">
        </div>
        <div class="col-xs-2">
          NIM<br>
          Nama<br>
          Inisial<br>
          Konsulen<br>
          Gol. Darah<br>
          <br>
          Jumlah Jam<br>
          Jumlah SKS<br>
          Jumlah Kasus<br>
          <br>
          Tanggal Masuk<br>
          Status<br>
          Semester<br>
          Tingkat<br>
          <br>
          Email<br>
          No. GSM<br>
          No. CDMA<br>
          Pin BBM<br>
        </div>
        <div class="col-xs-8">
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->nim; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->nama_residen; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->inisial_residen; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->nama_konsulen; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->gol_darah; ?><br>
          <br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->jumlah_jam; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->jumlah_sks; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->jumlah_kasus; ?><br>
          <br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->tgl_masuk; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->status; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->semester; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->tingkat; ?><br>
          <br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->email; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->no_gsm; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->no_cdma; ?><br>
          :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $residen->pin_bb; ?><br>
        </div>
      </div>
    </section>
  </div><!-- ./wrapper -->
</body>
</html>
