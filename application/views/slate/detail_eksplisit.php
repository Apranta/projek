<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <div class="row">
    	<h2>Pengetahuan Eksplisit</h2>
      <div class="col-md-6 well">
        <table class="table">
          <tr>
            <td style="width: 25%;"><b>Judul</b></td>
            <td><?= $detail_eksplisit->judul ?></td>
          </tr>
          <tr>
            <td><b>Deskripsi</b></td>
            <td><?= $detail_eksplisit->deskripsi ?></td>
          </tr>
        </table>
        <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		  Tampilkan SOP
		</button>
		<?= form_open('komentar_eksplisit') ?>
          <div class="form-group">
            <label for="komentar">Komentar*</label>
            <textarea class="form-control" id="komentar" name="komentar"></textarea>
          </div>
          <input type="hidden" name="id" value="<?= $detail_eksplisit->id_eksplisit ?>" />
          <input class="btn btn-success" type="submit" value="Tambah">
        <?= form_close() ?>
    </div>
    <div class="col-md-6">
        <?php foreach ($komentar_eksplisit as $row): ?>
          <?php 
            $p        = $this->pengguna_model->get_data($row->id_pengguna);
            $nama     = $p->nama;
            $tipeuser = $p->tipeuser; 
          ?>
          <div class="list-group">
            <a href="#" class="list-group-item">
              <h5 class="list-group-item-heading"><?= $nama ?></h5>
              <h6><?= $tipeuser ?></h6>
              <p class="list-group-item-text"><?= $row->isi_komentar ?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <?php echo "<iframe  src=".base_url("eksplisit")."/".$detail_eksplisit->file."  width='100%' height='500' ></iframe>";   ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('slate/includes/footer'); ?>