
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Operator</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Komponen</li>
            <li class="active">Operator</li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Lihat Operator</h3>
                </div>
                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama Operator</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $operator->nama_operator; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Inisial Operator</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $operator->inisial_operator; ?></label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/komponen/operator/ubah') . '/' . $operator->id; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/komponen/operator'); ?>">Kembali</a>
                  </center>
                </div>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
