
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>pegawai</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Pegawai</a></li>
            <li class="active">Tambah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah pegawai</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengguna/pegawai/insert'); ?>">
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
                    <label for="username_konsulen" class="col-md-3 control-label">Username*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password*</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_konsulen" class="col-md-3 control-label">Nama *</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama pegawai" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nip" class="col-md-3 control-label">NIP *</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-md-3 control-label">Tempat Lahir*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                  </div>                  

                  <div class="form-group">
                    <label for="tanggal_lahir" class="col-md-3 control-label">Tanggal Lahir*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="tgl_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                    </div>
                  </div>                  

                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="divisi" class="col-md-3 control-label">Divisi*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi" required>
                    </div>                    
                  </div>

                  <div class="form-group">
                    <label for="jabatan" class="col-md-3 control-label">Jabatan*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat" class="col-md-3 control-label">Alamat*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email*</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="no_hp" class="col-md-3 control-label">No. Handphone*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Handphone GSM" required>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
