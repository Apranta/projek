
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Ruangan</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Komponen</li>
            <li class="active">Ruangan</li>
            <li class="active">Tambah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Ruangan</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/komponen/ruangan/insert'); ?>">
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
                    <label for="nama_ruang" class="col-md-3 control-label">Nama Ruangan*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" placeholder="Nama Ruangan" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inisial_ruang" class="col-md-3 control-label">Inisial Ruangan*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inisial_ruang" name="inisial_ruang" placeholder="Inisial Ruangan" required>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/komponen/ruangan'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
