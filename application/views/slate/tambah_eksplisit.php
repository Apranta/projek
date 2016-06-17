<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <div class="row">
      <h2>Tambah Pengetahuan Eksplisit</h2>
      <div class="col-md-6 well">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengetahuan/eksplisit/insert'); ?>" enctype="multipart/form-data">
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
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
              </div>
            </div>

            <div class="form-group">
              <label for="masalah" class="col-md-3 control-label">Deskripsi*</label>
              <div class="col-md-9">                      
                <textarea class="form-control" name="deskripsi"  placeholder = "Deskripsi" rows = "5" required></textarea>
              </div>
            </div>  

            <div class="form-group">
              <label for="solusi" class="col-md-3 control-label">Pilih SOP</label>
              <div class="col-md-9">
                <input type="file" class="form-control" id="sop" name="sop" placeholder="File SOP">
              </div>                    
            </div>              
            

          </div>

          <div class="box-footer">
            <center>
              <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
              <input type="reset" class="btn btn-default btn-flat" value="Reset">
              <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Pengetahuan/eksplisit'); ?>">Kembali</a>
            </center>
          </div>
          </form>
      </div>
    </div>
  </div>

  <?php $this->load->view('slate/includes/footer'); ?>