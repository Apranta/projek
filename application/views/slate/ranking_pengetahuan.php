<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="container">
		<center>
			<h1>Ranking pegawai 10 teratas</h1>
		</center>
		<div class="row">
			<div class="col-md-6 well">
				<center>
					<h2>Pengetahuan Tacit</h2>
				</center>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama</td>
							<td>Jumlah Pengetahuan</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; foreach ($ranking_tacit as $row): ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $row->nama ?></td>
								<td><?= $row->jumlah_pengetahuan ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-6 well">
				<center>
					<h2>Pengetahuan Eksplisit</h2>
				</center>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama</td>
							<td>Jumlah Pengetahuan</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; foreach ($ranking_eksplisit as $row): ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $row->nama ?></td>
								<td><?= $row->jumlah_pengetahuan ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>

<?php $this->load->view('slate/includes/footer'); ?>