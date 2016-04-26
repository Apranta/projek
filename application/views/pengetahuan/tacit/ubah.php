
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pengetahuan</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Pengetahuan</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Tacit</a></li>
            <li class="active">Ubah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ubah Pengetahuan</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengetahuan/tacit/edit/'.$tacit->id); ?>">
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
                    <label for="judul" class="col-md-3 control-label">Judul*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value = "<?php echo $tacit->judul;?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="masalah" class="col-md-3 control-label">Masalah*</label>
                    <div class="col-md-9">                      
                      <textarea class="form-control" name="masalah" required><?php echo $tacit->masalah; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="solusi" class="col-md-3 control-label">Solusi *</label>
                    <div class="col-md-9">
                      <textarea class="form-control" name="solusi"  rows ="10"><?php echo $tacit->solusi; ?></textarea>
                    </div>
                  </div>                

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Pengetahuan/tacit'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
