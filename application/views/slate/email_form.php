<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

<div class="container">
	<center>
		<h2>Kirim reward</h2>
	</center>
	<?php  
		$msg = $this->session->flashdata('msg');
		if (isset($msg)) {
			echo $msg;
		}
	?>
	<?= form_open('pengguna/sekertaris/kirim_reward/' . $this->session->flashdata('id_pengguna')) ?>
		<div class="form-group">
			<label for="Subject">Judul Reward</label>
			<input class="form-control" type="text" name="reward" />
		</div>
		<?php echo $this->ckeditor->editor('deskripsi', '');?>
		<input class="btn btn-success" type="submit" name="send" value="Send" />
	<?= form_close() ?>
</div>

<?php $this->load->view('slate/includes/footer'); ?>