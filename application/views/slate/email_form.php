<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

<div class="container">
	<center>
		<h2>Kirim reward melalui email</h2>
	</center>
	<?php  
		$msg = $this->session->flashdata('msg');
		if (isset($msg)) {
			echo $msg;
		}
	?>
	<?= form_open('pengguna/sekertaris/email') ?>
		<div class="form-group">
			<label for="to">To</label>
			<input class="form-control" type="text" name="to" />
		</div>
		<div class="form-group">
			<label for="Subject">Subject</label>
			<input class="form-control" type="text" name="subject" />
		</div>
		<?php echo $this->ckeditor->editor('message', '');?>
		<input class="btn btn-success" type="submit" name="send" value="Send" />
	<?= form_close() ?>
</div>

<?php $this->load->view('slate/includes/footer'); ?>