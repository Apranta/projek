
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Buku Harian</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Catatan Harian</li>
            <li class="active">Buku Harian</li>
            <li class="active">Ubah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ubah Data Buku Harian</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url("index.php/catatanharian/buku_harian/edit/" . $bukuharian->id); ?>">
                <div class="box-body">
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
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal');?>
                    </div>
                  <?php endif; ?>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Mulai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo date("d-m-Y", strtotime($bukuharian->tgl_mulai)); ?></label>
                    </div>
                    <label class="col-md-3 control-label">Jam Mulai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo $bukuharian->jam_mulai; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Selesai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo date("d-m-Y", strtotime($bukuharian->tgl_selesai)); ?></label>
                    </div>
                    <label class="col-md-3 control-label">Jam Selesai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo $bukuharian->jam_siap; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Residen</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $bukuharian->nama_residen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Kegiatan</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $bukuharian->modul; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Catatan Residen</label>
                    <div class="col-md-9">
                      <textarea class="form-control" rows="3" readonly><?php echo $bukuharian->catatan_residen; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="catatan_konsulen" class="col-md-3 control-label">Catatan Konsulen</label>
                    <div class="col-md-9">
                      <textarea id="catatan_konsulen" name="catatan_konsulen" class="form-control" rows="3" placeholder="Catatan konsulen..."><?php echo $bukuharian->catatan_konsulen; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="paraf_konsulen" class="col-md-3 control-label">Paraf Konsulen</label>
                    <div class="col-md-2 radio">
                      <label>
                        <?php if($bukuharian->paraf_konsulen === "1"): ?>
                          <input type="radio" name="paraf_konsulen" id="paraf_konsulen" value="1" checked>
                        <?php else: ?>
                          <input type="radio" name="paraf_konsulen" id="paraf_konsulen" value="1">
                        <?php endif; ?>
                        Ya
                      </label>
                    </div>
                    <div class="col-md-2 radio">
                      <label>
                        <?php if($bukuharian->paraf_konsulen === "0"): ?>
                          <input type="radio" name="paraf_konsulen" id="paraf_konsulen" value="0" checked>
                        <?php else: ?>
                          <input type="radio" name="paraf_konsulen" id="paraf_konsulen" value="0">
                        <?php endif; ?>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/catatanharian/buku_harian'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
