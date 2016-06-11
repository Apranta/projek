<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <div class="row">
      <h3>Pengetahuan Tacit</h3>
      <div class="col-md-6 well">
        <table class="table">
          <tr>
            <td style="width: 25%;"><b>Judul</b></td>
            <td><?= $detail_tacit->judul ?></td>
          </tr>
          <tr>
            <td><b>Masalah</b></td>
            <td><?= $detail_tacit->masalah ?></td>
          </tr>
          <tr>
            <td><b>Solusi</b></td>
            <td><?= $detail_tacit->solusi ?></td>
          </tr>
          <tr>
            <td><b>Tanggal Input</b></td>
            <td><?= $detail_tacit->tanggal_input ?></td>
          </tr>
        </table>
        <?= form_open('KomentarTacit') ?>
          <div class="form-group">
            <label for="komentar">Komentar*</label>
            <textarea class="form-control" id="komentar" name="komentar"></textarea>
          </div>
          <input type="hidden" name="id" value="<?= $detail_tacit->id_tacit ?>" />
          <input class="btn btn-success" type="submit" value="Tambah">
        <?= form_close() ?>
      </div>
      <div class="col-md-6">
        <?php foreach ($komentar_tacit as $row): ?>
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
  </div>

  <?php $this->load->view('slate/includes/footer'); ?>