
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Profil</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profil</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Profil Residen</h3>
                </div>
                
                <form class="form-horizontal" method="POST" action="<?php echo base_url("index.php/profil/edit"); ?>">
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
                    <label class="col-md-3 control-label">NIM</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->nim; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Konsulen</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->nama_konsulen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_residen" class="col-md-3 control-label">Nama Residen</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama_residen" name="nama_residen" placeholder="Nama Residen" value="<?php echo $residen->nama_residen; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inisial_residen" class="col-md-3 control-label">Inisial Residen</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inisial_residen" name="inisial_residen" placeholder="Inisial Residen" value="<?php echo $residen->inisial_residen; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah Jam</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->jumlah_jam; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah SKS</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->jumlah_sks; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Jumlah Kasus</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->jumlah_kasus; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Status</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->status; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Semester</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->semester; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Masuk</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo date("d-m-Y", strtotime($residen->tgl_masuk)); ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $residen->email; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_gsm" class="col-md-3 control-label">No. HP GSM</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_gsm" name="no_gsm" placeholder="No. Handphone GSM" value="<?php echo $residen->no_gsm; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_cdma" class="col-md-3 control-label">No. HP CDMA</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_cdma" name="no_cdma" placeholder="No. Handphone CDMA" value="<?php echo $residen->no_cdma; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pin_bb" class="col-md-3 control-label">PIN BBM</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="pin_bb" name="pin_bb" placeholder="PIN Blackberry Messenger" value="<?php echo $residen->pin_bb; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gol_darah" class="col-md-3 control-label">Golongan Darah</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah" value="<?php echo $residen->gol_darah; ?>">
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                  </center>
                </div>
                </form>
              </div>              
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Foto Profil</h3> (Ukuran Maksimal : 2 MB)
                </div>
                
                <form class="form-horizontal" action="<?php echo base_url("index.php/profil/edit_foto"); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="box-body">
                  <?php if($this->session->flashdata('berhasil_foto')): ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                      <?php echo $this->session->flashdata('berhasil_foto');?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('gagal_foto')): ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal_foto');?>
                    </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <div class="col-md-12">
                      <center>
                        <a href="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" target="_blank">
                          <img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" class="img-rounded" alt="User Image" width="150"/>
                        </a>
                      </center>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto" class="col-md-3 control-label">Pilih Foto</label>
                    <div class="col-md-9">
                      <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto Profil">
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Ubah Foto</button>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
