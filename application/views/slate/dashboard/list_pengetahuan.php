<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<center>
					<h2>Pengetahuan Tacit</h2>
				</center>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Judul Tacit</th>
							<th>Solusi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; foreach ($list_tacit as $row): ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $row->tanggal_input ?></td>
								<td><a href="<?= base_url('index.php/pengetahuan/tacit/detail/'.$row->id_tacit) ?>"><?= $row->judul ?></a></td>
								<td><?= $row->solusi ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<center>
					<h2>Pengetahuan Eksplisit</h2>
				</center>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
					        <th>Judul eksplisit</th>
					        <th>Masalah</th>
					        <th>Solusi</th>  
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; foreach ($list_eksplisit as $row): ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $row->tanggal_input ?></td>
								<td><a href="<?= base_url('index.php/pengetahuan/eksplisit/detail/'.$row->id_eksplisit) ?>"><?= $row->judul ?></a></td>
								<td><?= $row->deskripsi ?></td>
								<td><?= $row->file ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>