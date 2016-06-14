<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="container">
		<center>
			<h1>Daftar Pengguna</h1>
		</center>
		<a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengguna/admin/tambah'); ?>"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Pengguna</a>
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
	          <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
	          <?php echo $this->session->flashdata('gagal');?>
	        </div>
	      <?php endif; ?>
		<table class="table table-bordered table-hover">
 			<thead>
 				<tr>
 					<th>No</th>
 					<th>Nama</th>
 					<th>NIP</th>
 					<th>Tipe User</th>
 					<th>Email</th>
 					<th>No. Handphone</th>
 					<th>Pilihan</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php $i = 0; foreach ($list_pengguna as $row): ?>
 					<?php if ($row->tipeuser != 'administrator'): ?>
	 					<tr>
	 						<td><?= ++$i ?></td>
	 						<td><?= $row->nama ?></td>
	 						<td><?= $row->nip ?></td>
	 						<td><?= $row->tipeuser ?></td>
	 						<td><?= $row->email ?></td>
	 						<td><?= $row->no_hp ?></td>
	 						<td><center>
	                        <!--<a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="<?= base_url("index.php/pengguna/admin/lihat/" . $row->id_pengguna) ?>"><i class="glyphicon glyphicon-search"></i></a>--><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="<?= base_url("index.php/pengguna/admin/ubah/" . $row->id_pengguna) ?>"><i class="glyphicon glyphicon-edit"></i></a><a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="<?= base_url("index.php/pengguna/admin/hapus/" . $row->id_pengguna) ?>"><i class="glyphicon glyphicon-trash"></i></a>
	                    	</center></td>
	 					</tr>
 					<?php endif; ?>
 				<?php endforeach; ?>
 			</tbody>
		</table>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>