<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>
<div class="container">
	<center>
		<h1>Pegawai yang pernah mendapatkan reward</h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>	
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; foreach($reward as $row): ?>
					<?php  
						$pegawai = $this->pengguna_model->get_data($row->id_pengguna);
					?>
					<tr>
						<td><?= ++$i ?></td>
						<td><?= $pegawai->nip ?></td>
						<td><?= $pegawai->nama ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</center>
</div>
<?php $this->load->view('slate/includes/footer'); ?>