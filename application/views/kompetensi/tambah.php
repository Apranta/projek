
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Kompetensi</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kompetensi</li>
      <li class="active">Tambah</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Tambah Data Kompetensi</h3>
          </div>

          <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/catatanharian/logbook/insert'); ?>">
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
          <!-- Tanggal -->
          <div class="form-group">
            <label for="tanggal" class="col-md-3 control-label">Tanggal*</label>
            <div class="col-md-9">
              <input class="form-control tanggal" id="tanggal" name="tanggal" placeholder="Tanggal Mulai" value="<?php echo date("d-m-Y"); ?>" required>
            </div>
          </div>
          <!-- Tanggal -->

          <!-- Nomer Rekam Medis -->
          <div class="form-group">
            <label for="no_rm" class="col-md-3 control-label">Nomer Rekam Medis*</label>
            <div class="col-md-9">
              <select id='no_rm' name='no_rm' class='form-control chosen-select' data-placeholder='Pilih Nomer Rekam Medis' required>
                <option></option>
                <option value='001'>Pasien 1</option>
                <option value='002'>Pasien 2</option>
                <option value='003'>Pasien 3</option>
                <option value='004'>Pasien 4</option>
                <option value='005'>Pasien 5</option>
              </select>
            </div>
          </div>
          <!-- Nomer Rekam Medis -->

          <!-- Stase -->
          <div class="form-group">
            <label for="stase" class="col-md-3 control-label">Stase*</label>
            <div class="col-md-9">
              <select name='stase'='stase' name='stase' class='form-control chosen-select' data-placeholder='Pilih Stase' required>
                <option></option>
                <option value='Orthopedi'>Orthopedi</option>
                <option value='Onkologi'>Onkologi</option>
                <option value='Obgyn'>Obgyn</option>
                <option value='Plastik'>Plastik</option>
                <option value='THT'>THT</option>
                <option value='Urologi'>Urologi</option>
                <option value='Syaraf'>Syaraf</option>
                <option value='Digestif/Anak'>Digestif/Anak</option>
                <option value='Thorak'>Thorak</option>
                <option value='Mata'>Mata</option>
                <option value='Graha'>Graha</option>
                <option value='Emergency dan P2'>Emergency dan P2</option>
                <option value='P1 (Resusitasi)'>P1 (Resusitasi)</option>
                <option value='HCU-EMG'>HCU-EMG</option>
                <option value='HCU-BHC'>HCU-BHC</option>
                <option value='RSDS'>RSDS</option>
                <option value='RSHS'>RSHS</option>
                <option value='RR COT'>RR COT</option>
                <option value='RSUD'>RSUD</option>
                <option value='RS HARKIT'>RS Harkit</option>
                <option value='RS Jejaring'>RS Jejaring</option>\
              </select>
            </div>
          </div>
          <!-- Stase -->

          <!-- Diagnosis -->
          <div class="form-group">
            <label for="diagnosis" class="col-md-3 control-label">Diagnosis</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="diagnosis" name="diagnosis" placeholder="Diagnosis" required>
            </div>
          </div>
          <!-- Diagnosis -->

          <!-- Tindakan -->
          <div class="form-group">
            <label for="tindakan" class="col-md-3 control-label">Tindakan</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tindakan" name="tindakan" placeholder="Tindakan" required>
            </div>
          </div>
          <!-- Tindakan -->

          <!-- Kompetensi -->
          <div class="form-group">
            <label for="tindakan" class="col-md-3 control-label">Kompetensi</label>

            <!-- Kompetensi Umum -->
            <div class="col-md-9">
              <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Kompetensi Umum</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <!-- Item Kompetensi -->
                  <div class="form-group">
                    <div class="checkbox col-md-12">
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="1">
                        Kompetensi 1
                      </label>
                    </br>
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="2">
                        Kompetensi 2
                      </label>
                    </div>
                  </div>
                  <!-- Item Kompetensi -->

                </div><!-- /.box-body -->
              </div><!--/.direct-chat -->
            </div>
            <!-- Kompetensi Umum -->

            <!-- Kompetensi Bidang -->
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Kompetensi Bidang</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <!-- Item Kompetensi -->
                  <div class="form-group">
                    <div class="checkbox col-md-12">
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="1">
                        Kompetensi 1
                      </label>
                    </br>
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="2">
                        Kompetensi 2
                      </label>
                    </div>
                  </div>

                </div><!-- /.box-body -->
              </div><!--/.direct-chat -->
            </div>
            <!-- Kompetensi Bidang -->

            <!-- Kompetensi Keadaan Khusus -->
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Kompetensi Keadaan Khusus</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <!-- Item Kompetensi -->
                  <div class="form-group">
                    <div class="checkbox col-md-12">
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="1">
                        Kompetensi 1
                      </label>
                    </br>
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="2">
                        Kompetensi 2
                      </label>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!--/.direct-chat -->
            </div>
            <!-- Kompetensi Keadaan Khusus -->

            <!-- Kompetensi Pendukung -->
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Kompetensi Pendukung</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <!-- Item Kompetensi -->
                  <div class="form-group">
                    <div class="checkbox col-md-12">
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="1">
                        Kompetensi 1
                      </label>
                    </br>
                      <label>
                        <input type="checkbox" name="kompetensi[]" id="kompetensi" value="2">
                        Kompetensi 2
                      </label>
                    </div>
                  </div>

                </div><!-- /.box-body -->
              </div><!--/.direct-chat -->
            </div>
            <!-- Kompetensi Pendukung -->

          </div>
          <!-- Kompetensi -->

          <!-- Konsulen -->
          <div class="form-group">
            <label for="konsulen" class="col-md-3 control-label">Konsulen*</label>
            <div class="col-md-9">
              <select id='konsulen' name='konsulen' class='form-control chosen-select' data-placeholder='Pilih Konsulen' required>
                <option></option>
                <option value="1">Konsulen 1</option>
                <option value="2">Konsulen 2</option>
                <option value="3">Konsulen 3</option>
              </select>
            </div>
          </div>
          <!-- Nomer Rekam Medis -->

          <!-- Catatan Residen -->
          <div class="form-group">
            <label for="catatan_residen" class="col-md-3 control-label">Catatan Residen</label>
            <div class="col-md-9">
              <textarea id="catatan_residen" name="catatan_residen" class="form-control" rows="3" placeholder="Catatan residen..."></textarea>
            </div>
          </div>
          <!-- Catatan Residen -->
        </div>

        <div class="box-footer">
          <center>
            <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
            <input type="reset" class="btn btn-default btn-flat" value="Reset">
            <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/catatanharian/logbook'); ?>">Kembali</a>
          </center>
        </div>
      </form>
    </div>              
  </div>
</div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
