<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 well">
				<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Hapus pengguna</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama pengguna</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pengguna->nama ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $pengguna->nip; ?></label>
                    </div>
                  </div>
                </div>
                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/pengguna/admin/delete') . '/' . $pengguna->id_pengguna; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/admin'); ?>">Tidak</a>
                  </center>
                </div>
              </div> 
			</div>
		</div>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>