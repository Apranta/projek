<!DOCTYPE html>
<html>
<head>
	<title>Knowledge Management System Dishub Kominfo Kota Prabumulih | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slate/css/bootstrap.min.css') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets'); ?>/img/favicon.png">
	<script type="text/javascript" src="<?= base_url('assets/slate/js/jquery-2.1.4.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/slate/js/bootstrap.min.js') ?>"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Dishub Kominfo</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Beranda</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengetahuan <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="<?php echo base_url('index.php/pengetahuan/tacit');?>">Tacit</a></li>
	            <li><a href="<?php echo base_url('index.php/pengetahuan/eksplisit');?>">Eksplisit</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li style="text-align: center;"><img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" style="width: 60px; height: 60px; border-radius: 50%;"> <p>
                    <?php echo $this->session->userdata('nama');?>
                    <small><?php echo ucwords($this->session->userdata('tipeuser'));?></small>
                  </p></li>
	            <li class="divider"></li>
	            <li><a href="#">Profil</a></li>
	            <li><a href="#">Ubah Password</a></li>
	            <li><a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

  <div class="container">
    <div class="row">
      <h2>Tambah Pengetahuan Eksplisit</h2>
      <div class="col-md-6 well">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengetahuan/eksplisit/insert'); ?>" enctype="multipart/form-data">
          <div class="box-body">
            <?php if($this->session->flashdata('berhasil')): ?>
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                <?php echo $this->session->flashdata('berhasil');?>
              </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('gagal')): ?>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                <?php echo $this->session->flashdata('gagal');?>
              </div>
            <?php endif; ?>                

            <div class="form-group">
              <label for="judul" class="col-md-3 control-label">Judul*</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
              </div>
            </div>

            <div class="form-group">
              <label for="masalah" class="col-md-3 control-label">Masalah*</label>
              <div class="col-md-9">                      
                <textarea class="form-control" name="masalah"  placeholder = "Masalah" rows = "5" required></textarea>
              </div>
            </div>  

            <div class="form-group">
              <label for="solusi" class="col-md-3 control-label">Pilih SOP</label>
              <div class="col-md-9">
                <input type="file" class="form-control" id="sop" name="sop" placeholder="File SOP">
              </div>                    
            </div>              
            

          </div>

          <div class="box-footer">
            <center>
              <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
              <input type="reset" class="btn btn-default btn-flat" value="Reset">
              <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Pengetahuan/eksplisit'); ?>">Kembali</a>
            </center>
          </div>
          </form>
      </div>
    </div>
  </div>

  <footer id="footer">
    <div class="container">
      <div class="pull-left">
      <strong><?php echo system_author; ?> &copy; <?php echo date('Y'); ?> - <?php echo system_title; ?>.</strong> All rights reserved.
       
      </div>
      <div class="pull-right">
        Version <?php echo system_version." | Elapsed time : ".$this->benchmark->elapsed_time()." seconds"; ?>
      </div>
    </div>
  </footer>
  <script type="text/javascript">
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
      $('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
    }
    
    $("#topContainer").css("height", $(window).height());
    $(".contentContainer").css("min-height", $(window).height());
  </script>   
	
</body>
</html>