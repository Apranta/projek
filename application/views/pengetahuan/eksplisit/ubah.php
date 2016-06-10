
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pengetahuan</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/eksplisit'); ?>">Pengetahuan</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/eksplisit'); ?>">Eksplisit</a></li>
            <li class="active">Tambah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">            
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Pengetahuan</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengetahuan/eksplisit/edit').'/'.$eksplisit->id_eksplisit; ?>" enctype="multipart/form-data">
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
                      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value = "<?php echo $eksplisit->judul?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="deskripsi" class="col-md-3 control-label">deskripsi*</label>
                    <div class="col-md-9">                      
                      <textarea class="form-control" name="deskripsi" rows = "5" required><?php echo $eksplisit->deskripsi;?></textarea>

                    </div>
                  </div>  

                  <div class="form-group">
                    <label for="file" class="col-md-3 control-label">Pilih SOP</label>
                    <div class="col-md-9">
                      <input type="file" class="form-control" id="sop" name="sop" value = "dummy" label ="<?php echo $eksplisit->file;?>">
                    </div>                    
                  </div>              

                  <div class="form-group">
                    <label for="tanggal_input" class="col-md-3 control-label">Tanggal Input *</label>
                    <div class="col-md-9">
                      <input type = "text" id="tgl_input" name="tanggal_input" value = "<?php echo $eksplisit->tanggal_input?>">
                    </div> 
                  </div>

                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Pengetahuan/eksplisit'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>             
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
