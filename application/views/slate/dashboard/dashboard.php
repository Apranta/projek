<!DOCTYPE html>
<html>
<head>
	<title>Knowledge Management System Dishub Kominfo Kota Prabumulih | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slate/css/bootstrap.min.css') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets'); ?>/img/favicon.png">
	<script type="text/javascript" src="<?= base_url('assets/slate/js/jquery-2.1.4.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/slate/js/bootstrap.min.js') ?>"></script>

	<style type="text/css">
		#jumbotron {
			padding: 180px;
			text-align: center;
			margin-top: -1.5%;
		}

		#search_form {
			width: 30%;
			margin: 0 auto;
			margin-bottom: 1%;
			margin-top: -1%;
		}
	</style>
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

	<div class="jumbotron" id="jumbotron">
		<img src="<?= base_url('assets/slate/img/dishub-kominfo.png') ?>" width="100" height="110">
		<h1>Selamat datang di Knowledge Management System</h1>
	</div>
	<divlass="row" id="search_section">
		<div class="form-group" id="search_form">
		  <div class="input-group">
		    <input class="form-control" type="text" placeholder="Cari pengetahuan">
		    <span class="input-group-btn">
		      <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
		    </span>
		  </div>
		</div>
	</div>
	<div class="container well">
		<center>
			<h1>List Pengetahuan</h1>
		</center>
		<div class="row">
			<div class="col-md-6">
				<?php foreach ($list_tacit as $row): ?>
					<div class="list-group">
					  <a href="<?= base_url('index.php/pengetahuan/tacit/detail/'.$row->id_tacit) ?>" class="list-group-item">
					    <h4 class="list-group-item-heading"><?= $row->judul ?></h4>
					    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-md-6">
				<?php foreach ($list_eksplisit as $row): ?>
					<div class="list-group">
					  <a href="<?= base_url('index.php/pengetahuan/eksplisit/detail/'.$row->id_eksplisit) ?>" class="list-group-item">
					    <h4 class="list-group-item-heading"><?= $row->judul ?></h4>
					    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>



		<script type="text/javascript">
			$(document).ready(function() {
				$("#jumbotron").height($(window).height() - "200px");
			});
		</script>
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