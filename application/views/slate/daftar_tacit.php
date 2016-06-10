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
    <center>
      <h1>Daftar Pengetahuan Eksplisit</h1>
    </center>
    <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengetahuan/tacit/tambah') ?>"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Pengetahuan</a>
    <table id="table_tacit" class="table table-bordered table-hover" >
      <thead>
        <tr>
          <th >Tanggal</th>
          <th>Nama</th>
          <th>Judul Tacit</th>
          <th>Masalah</th>
          <th>Solusi</th>  
          <th>Pilihan</th>                  
        </tr>
      </thead>
      
      <tbody>
        <?php foreach ($list_tacit as $tacit) {
          echo 
            "<tr>".
              "<td>".$tacit->tanggal_input."</td>".
              "<td>".$tacit->nama."</td>".
              "<td>".$tacit->judul."</td>".
              "<td>".$tacit->masalah."</td>".
              "<td>".$tacit->solusi."</td>".                        
              '<td><center>
              <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/lihat/" . $tacit->id_tacit) . '"><i class="glyphicon glyphicon-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/ubah" .'/'. $tacit->id_tacit) . '"><i class="glyphicon glyphicon-edit"></i></a>';
          if ($this->session->userdata('tipeuser') == 'administrator') {                      
            echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/hapus/" . $tacit->id_tacit) . '"><i class="glyphicon glyphicon-trash-a"></i></a>';
          }
          echo '</center></td>'.
            "</tr>";
        }
        ?>
      </tbody>
    </table>
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