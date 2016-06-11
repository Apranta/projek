<?php $this->load->view('slate/includes/header'); ?>
	<style type="text/css">
		#jumbotron {
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
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="jumbotron" id="jumbotron">
		<img src="<?= base_url('assets/slate/img/dishub-kominfo.png') ?>" width="100" height="110">
		<h2>Selamat datang di Knowledge Management System</h2>
	</div>
	<div class="row" id="search_section">
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
			<h3>List Pengetahuan</h3>
		</center>
		<div class="row">
			<div class="col-md-6">
				<center>
					<h4>Pengetahuan Tacit</h4>
				</center>
				<?php foreach ($list_tacit as $row): ?>
					<div class="list-group">
					  <a href="<?= base_url('index.php/pengetahuan/tacit/detail/'.$row->id_tacit) ?>" class="list-group-item">
					    <h5 class="list-group-item-heading"><?= $row->judul ?></h5>
					    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-md-6">
				<center>
					<h4>Pengetahuan Eksplisit</h4>
				</center>
				<?php foreach ($list_eksplisit as $row): ?>
					<div class="list-group">
					  <a href="<?= base_url('index.php/pengetahuan/eksplisit/detail/'.$row->id_eksplisit) ?>" class="list-group-item">
					    <h5 class="list-group-item-heading"><?= $row->judul ?></h5>
					    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>