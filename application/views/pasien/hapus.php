
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pasien</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Komponen</li>
            <li class="active">Pasien</li>
            <li class="active">Hapus</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Hapus Pasien</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">No. Rekam Medis</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pasien->no_rm; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama Pasien</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pasien->nama_pasien; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Usia</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pasien->umur; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Kelamin</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pasien->jenis_kelamin; ?></label>
                    </div>
                  </div>
                </div>
                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/komponen/pasien/delete') . '/' . $pasien->no_rm; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/komponen/pasien'); ?>">Tidak</a>
                  </center>
                </div>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->