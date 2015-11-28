
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Residen</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengguna</li>
            <li class="active">Residen</li>
            <li class="active">Ubah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ubah Residen</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengguna/residen/edit/' . $residen->id); ?>">
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
                    <label for="nim" class="col-md-3 control-label">NIM*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="<?php echo $residen->nim; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_residen" class="col-md-3 control-label">Nama Residen*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama_residen" name="nama_residen" placeholder="Nama Residen" value="<?php echo $residen->nama_residen; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inisial_residen" class="col-md-3 control-label">Inisial Residen*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inisial_residen" name="inisial_residen" placeholder="Inisial Residen" value="<?php echo $residen->inisial_residen; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="id_konsulen" class="col-md-3 control-label">Konsulen*</label>
                    <div class="col-md-9">
                      <select id='id_konsulen' name='id_konsulen' class='form-control chosen-select' data-placeholder='Pilih Konsulen' required>
                        <option></option>
                        <?php foreach ($list_konsulen as $konsulen) {
                          if ($konsulen->id === $residen->id_konsulen) {
                            echo "<option value='" . $konsulen->id . "' selected>" . $konsulen->nama_konsulen . "</option>\n";
                          }
                          else {
                            echo "<option value='" . $konsulen->id . "'>" . $konsulen->nama_konsulen . "</option>\n";
                          }
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email*</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $residen->email; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_gsm" class="col-md-3 control-label">No. HP GSM*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_gsm" name="no_gsm" placeholder="No. Handphone GSM" value="<?php echo $residen->no_gsm; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_cdma" class="col-md-3 control-label">No. HP CDMA*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_cdma" name="no_cdma" placeholder="No. Handphone CDMA" value="<?php echo $residen->no_cdma; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pin_bb" class="col-md-3 control-label">PIN BBM</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="pin_bb" name="pin_bb" placeholder="PIN Blackberry Messenger" value="<?php echo $residen->pin_bb; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gol_darah" class="col-md-3 control-label">Golongan Darah</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah" value="<?php echo $residen->gol_darah; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="status" class="col-md-3 control-label">Status</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="Aktif" readonly required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="semester" class="col-md-3 control-label">Semester</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" value="1" readonly required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tgl_masuk" class="col-md-3 control-label">Tanggal Masuk</label>
                    <div class="col-md-9">
                      <input class="form-control tanggal" id="tgl_masuk" name="tgl_masuk" placeholder="Tanggal Masuk" value="<?php echo date("d-m-Y", strtotime($residen->tgl_masuk)); ?>" required>
                    </div>
                  </div>                
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/residen'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Password Residen</h3>
                </div>
                
                <form class="form-horizontal" action="<?php echo base_url("index.php/pengguna/residen/edit_password/" . $residen->id); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="box-body">
                  <?php if($this->session->flashdata('berhasil_password')): ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                      <?php echo $this->session->flashdata('berhasil_password');?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('gagal_password')): ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal_password');?>
                    </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <label for="username" class="col-md-3 control-label">Username*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $residen->username; ?>" readonly required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Ubah Password</button>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
