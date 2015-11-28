
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Ubah Password</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ubah Password</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <b>
                  Silahkan ubah password Anda.
                  <br>
                  Setelah berhasil mengubah password, Anda akan diminta untuk melakukan login ulang untuk melanjutkan pengoperasian <?php echo system_name; ?>.
                  </b>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/ubah_password/update'); ?>">
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
                    <label for="password_baru" class="col-md-3 control-label">Password Baru</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukkan password baru" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="konfirmasi_password_baru" class="col-md-3 control-label">Konfirmasi Password Baru</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" id="konfirmasi_password_baru" name="konfirmasi_password_baru" placeholder="Konfirmasi password baru" required>
                    </div>
                  </div>

                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <button type="reset" class="btn btn-default btn-flat">Reset</button>
                  </center>
                </div>
                </form>
              </div>
            </div>

            <div class="col-sm-6 col-md-6">
              <div class="box box-warning">
                <div class="box-header">
                  <h4><i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;<b>Perhatian</b></h4>
                </div>
                <div class="box-body">
                  <ol style="padding-left:2em;">
                    <li>Password dianjurkan minimal 6 digit tanpa spasi (dapat berupa gabungan huruf dan angka).</li>
                    <li>Huruf besar atau kecil password agar diperhatikan.</li>
                    <li>Jangan menggunakan karakter spesial berikut ke dalam password Anda: (Misal: !$%^&*()_+|~-=\`{}[]:";'<>?,./)</li>
                    <li>Jaga baik-baik password Anda, jangan sampai hilang atau lupa.</li>
                    <li>Jangan sekali-kali memberikan password Anda kepada siapapun demi keamanan, kerahasiaan dan validitas data akademik Anda.</li>
                    <li>Jika Anda kehilangan password Anda, segeralah hubungi admin <?php echo system_name; ?> yang bersangkutan.</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
