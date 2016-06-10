
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>pegawai</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Pegawai</a></li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data pegawai</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $pegawai->username; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama pegawai</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->nama; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->nip; ?></label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tempat Lahir</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->tempat_lahir; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Lahir</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->tanggal_lahir; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">`Jenis Kelamin</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->jenis_kelamin; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Divisi</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->divisi; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->jabatan; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pegawai->alamat; ?></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $pegawai->email; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">No. Handphone</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $pegawai->no_hp; ?></label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/pengguna/pegawai/ubah') . '/' . $pegawai->id_pengguna; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Kembali</a>
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
                        <a href="<?php echo base_url('foto/'.$pegawai->foto); ?>" target="_blank">
                          <img src="<?php echo base_url('foto/'.$pegawai->foto); ?>" class="img-rounded" alt="User Image" width="150"/>
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
