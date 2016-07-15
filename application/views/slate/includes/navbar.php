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
	        <li><a href="<?= base_url() ?>">Beranda</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengetahuan <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="<?php echo base_url('index.php/pengetahuan/tacit/daftar');?>">Tacit</a></li>
	            <li><a href="<?php echo base_url('index.php/pengetahuan/eksplisit/daftar');?>">Eksplisit</a></li>
	          </ul>
	        </li>
	        <li><a href="<?= base_url('index.php/dashboard/list_pengetahuan') ?>">Daftar Pengetahuan</a></li>
	        <?php if ($this->session->userdata('tipeuser') === 'sekertaris'): ?>
	        <li><a href="<?= base_url('index.php/dashboard/ranking') ?>">Ranking Pegawai</a></li>
	        <li><a href="<?= base_url('index.php/pengguna/sekertaris/email') ?>">Kirim Reward</a></li>
	        <?php endif; ?>
	        <?php if ($this->session->userdata('tipeuser') === 'administrator'): ?>
	        	<li><a href="<?= base_url('index.php/pengguna/admin/') ?>">Tambah Pengguna</a></li>
	        <?php endif; ?>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li style="text-align: center;"><img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" style="width: 60px; height: 60px; border-radius: 50%;"> <p>
                    <?php echo $this->session->userdata('nama');?>
                    <small><?php echo ucwords($this->session->userdata('tipeuser'));?></small>
                  </p></li>
	            <li class="divider"></li>
	            <li><a href="<?php echo base_url('index.php/profil'); ?>">Profil</a></li>
	            <li><a href="<?php echo base_url('index.php/ubah_password'); ?>">Ubah Password</a></li>
	            <li><a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>