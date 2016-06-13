<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="container">
		<div class="row">
      <center>
        <h1>Profil Admin</h1>
      </center>
			<div class="col-md-6 well">
				<form class="form-horizontal" method="POST" action="<?php echo base_url("index.php/profil/edit"); ?>">
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
                    <label for="nama_konsulen" class="col-md-3 control-label">Nama *</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama admin" value="<?php echo $admin->nama; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nip" class="col-md-3 control-label">NIP *</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="<?php echo $admin->nip; ?>"required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-md-3 control-label">Tempat Lahir*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $admin->tempat_lahir; ?>"required>
                    </div>
                  </div>                  

                  <div class="form-group">
                    <label for="tanggal_lahir" class="col-md-3 control-label">Tanggal Lahir*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="tgl_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $admin->tanggal_lahir; ?>"required>
                    </div>
                  </div>                  

                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $admin->jenis_kelamin; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="divisi" class="col-md-3 control-label">Divisi*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi" value="<?php echo $admin->divisi; ?>"required>
                    </div>                    
                  </div>

                  <div class="form-group">
                    <label for="jabatan" class="col-md-3 control-label">Jabatan*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?php echo $admin->jabatan; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat" class="col-md-3 control-label">Alamat*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $admin->alamat; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email*</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $admin->email; ?>"required>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="no_hp" class="col-md-3 control-label">No. Handphone*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Handphone GSM" value="<?php echo $admin->no_hp; ?>"required>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                  </center>
                </div>
                </form>
			</div>
			<div class="col-md-6 well">
				<form class="form-horizontal" action="<?php echo base_url("index.php/profil/edit_foto"); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="box-body">
                  <?php if($this->session->flashdata('berhasil_foto')): ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                      <?php echo $this->session->flashdata('berhasil_foto');?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('gagal_foto')): ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal_foto');?>
                    </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <div class="col-md-12">
                      <center>
                        <a href="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" target="_blank">
                          <img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" class="img-rounded" alt="User Image" width="150"/>
                        </a>
                      </center>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto" class="col-md-3 control-label">Pilih Foto</label>
                    <div class="col-md-9">
                      <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto Profil">
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Ubah Foto</button>
                  </center>
                </div>
                </form>
			</div>
		</div>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>