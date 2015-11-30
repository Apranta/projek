
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Buku Harian</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Catatan Harian</li>
            <li class="active">Buku Harian</li>
            <li class="active">Hapus</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Hapus Data Buku Harian</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Mulai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo date("d-m-Y", strtotime($bukuharian->tgl_mulai)); ?></label>
                    </div>
                    <label class="col-md-2 control-label">Jam Mulai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo $bukuharian->jam_mulai; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Selesai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo date("d-m-Y", strtotime($bukuharian->tgl_selesai)); ?></label>
                    </div>
                    <label class="col-md-2 control-label">Jam Selesai</label>
                    <div class="col-md-3">
                      <label class="form-control-static"><?php echo $bukuharian->jam_siap; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Konsulen</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $bukuharian->nama_konsulen; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Kegiatan</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $bukuharian->modul; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Catatan Residen</label>
                    <div class="col-md-8">
                      <textarea class="form-control" rows="3" readonly><?php echo $bukuharian->catatan_residen; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Catatan Konsulen</label>
                    <div class="col-md-8">
                      <textarea class="form-control" rows="3" readonly><?php echo $bukuharian->catatan_konsulen; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Paraf Konsulen</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php if ($bukuharian->paraf_konsulen === 1) echo "Ada"; else echo "Tidak Ada"; ?></label>
                    </div>
                  </div>
                </div>
                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/catatanharian/buku_harian/delete') . '/' . $bukuharian->id; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/catatanharian/buku_harian'); ?>">Tidak</a>
                  </center>
                </div>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
