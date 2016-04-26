
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pengetahuan</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Pengetahuan</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Tacit</a></li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Pengetahuan Tacit</h3>
                </div>

                <div class="box-body form-horizontal">

                  <div class="form-group">
                    <label for="judul" class="col-md-3 control-label">Judul*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="judul" name="judul" rows ="3"  readonly = "yes" placeholder="Judul" value = "<?php echo $tacit->judul;?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="masalah" class="col-md-3 control-label">Masalah*</label>
                    <div class="col-md-9">                      
                      <textarea class="form-control" name="masalah"  rows ="6" readonly = "yes"  required ><?php echo $tacit->masalah; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="solusi" class="col-md-3 control-label">Solusi *</label>
                    <div class="col-md-9">
                      <textarea class="form-control" name="solusi"  rows ="12" readonly = "yes"><?php echo $tacit->solusi; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_konsulen" class="col-md-3 control-label">Tanggal Input *</label>
                    <div class="col-md-9">
                      <input type = "text"  name="tanggal_input" readonly = "yes" value = "<?php echo $tacit->tanggal_input ?>">
                    </div>
                  </div>                                                   
                
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/Pengetahuan/tacit/ubah') . '/' . $tacit->id; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Kembali</a>
                  </center>
                </div>
              </div>  
            </div>
            <div class = "col-sm-6 col-md-6 ">
                 <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Tambah Komentar</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              </div>                  
              <div class="box-body" style="display: block;">
                <div class="box-body form-horizontal">
                  <div class="input-group">                              
                      <div class="form-group">
                        <label for="masalah" class="col-md-3 control-label">Komentar*</label>
                        <div class="col-md-9"> 
                          <input id="id" type="hidden" value="<?php echo $this->uri->segment(4); ?>">                     
                          <textarea class="form-control" id="komentar" name="komentar"  cols = "50"></textarea>                          
                        </div>
                      </div>                                                        

                      <center>                                            
                        <button type="button" id="tambahKomentar" class="btn btn-primary btn-flat">Tambah</button>                         
                        <button type="submit" class="btn btn-default btn-flat">Batal</button>                         
                      </center>
                  </div>
                </div>
            </div>                    
            </div> 

            <input id="id_tacit" type="hidden" value="<?php echo $this->uri->segment(4); ?>">                     
            <div id="responsecontainer">  </div>           



          </div> 
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
