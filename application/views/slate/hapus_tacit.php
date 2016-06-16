<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tacit</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Judul</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $tacit->judul; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Masalah</label>
                    <div class="col-md-9">
                      <textarea class="col-md-12" rows = "5" ><?php echo $tacit->masalah; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Solusi</label>
                    <div class="col-md-9">                      
                      <textarea class="col-md-12" rows = "10"><?php echo $tacit->solusi; ?></textarea>
                    </div>
                  </div>                                                    
                </div>
                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/Pengetahuan/tacit/delete') . '/' . $tacit->id_tacit; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Pengetahuan/tacit'); ?>">Tidak</a>
                  </center>
                </div>
              </div>
			</div>
		</div>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>