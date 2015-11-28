
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Konsulen</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengguna</li>
            <li class="active">Konsulen</li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Konsulen</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $konsulen->username_konsulen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama Konsulen</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $konsulen->nama_konsulen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Inisial Konsulen</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $konsulen->inisial_konsulen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $konsulen->email; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">No. Handphone</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $konsulen->no_hp; ?></label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/pengguna/konsulen/ubah') . '/' . $konsulen->id; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/konsulen'); ?>">Kembali</a>
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
                        <a href="<?php echo base_url('foto/'.$konsulen->foto_konsulen); ?>" target="_blank">
                          <img src="<?php echo base_url('foto/'.$konsulen->foto_konsulen); ?>" class="img-rounded" alt="User Image" width="150"/>
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
