
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pasien</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Komponen</li>
            <li class="active">Pasien</li>
            <li class="active">Tambah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Pasien</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/komponen/pasien/insert'); ?>">
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

                  <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo validation_errors(); ?>
                    </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <label for="no_rm" class="col-md-3 control-label">No. Rekam Medis*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="No. Rekam Medis" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_pasien" class="col-md-3 control-label">Nama Pasien*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Nama Pasien" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="umur" class="col-md-3 control-label">Usia*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="umur" name="umur" placeholder="Usia" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin*</label>
                    <div class="col-md-3 radio">
                      <label>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
                        Laki-laki
                      </label>
                    </div>
                    <div class="col-md-3 radio">
                      <label>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/komponen/pasien'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
