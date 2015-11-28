
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Residen</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengguna</li>
            <li class="active">Residen</li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Residen</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->username; ?></label>
                    </div>
                  </div>
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
                    <label class="col-md-3 control-label">Nama Residen</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $residen->nama_residen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Inisial Residen</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $residen->inisial_residen; ?></label>
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
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->email; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">No. HP GSM</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->no_gsm; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">No. HP CDMA</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->no_cdma; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">PIN BBM</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->pin_bb; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Golongan Darah</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $residen->gol_darah; ?></label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/pengguna/residen/ubah') . '/' . $residen->id; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/residen'); ?>">Kembali</a>
                  </center>
                </div>
              </div>  
            </div>
            
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Foto Profil</h3>
                </div>
                
                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <div class="col-md-12">
                      <center>
                        <a href="<?php echo base_url('foto/'.$residen->foto_residen); ?>" target="_blank">
                          <img src="<?php echo base_url('foto/'.$residen->foto_residen); ?>" class="img-rounded" alt="User Image" width="150"/>
                        </a>
                      </center>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                </div>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
