
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Profil</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profil</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Profil Administrator</h3>
                </div>
                
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
                    <label for="nama_admin" class="col-md-3 control-label">Nama Administrator*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="Nama Administrator" value="<?php echo $admin->nama; ?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_admin" class="col-md-3 control-label">Tempat Lahir*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $admin->tempat_lahir; ?>" required>
                    </div>
                  </div>                  

                  <div class="form-group">
                    <label for="nama_admin" class="col-md-3 control-label">Tanggal Lahir*</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $admin->tanggal_lahir; ?>" required>
                    </div>

                  </div>                                    


                  <div class="form-group">
                    <label for="inisial_admin" class="col-md-3 control-label">Username Administrator*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inisial_admin" name="username" placeholder="Inisial Administrator" value="<?php echo $admin->username; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email*</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $admin->email; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_hp" class="col-md-3 control-label">No. Handphone*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Handphone GSM" value="<?php echo $admin->no_hp; ?>" required>
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
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Foto Profil</h3> (Ukuran Maksimal : 2 MB)
                </div>
                
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
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
