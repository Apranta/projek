
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pengetahuan</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/eksplisit'); ?>">Pengetahuan</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/eksplisit'); ?>">Eksplisit</a></li>
            <li class="active">Hapus</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">eksplisit</h3>
                </div>
<div class="box-body form-horizontal">

                  <div class="form-group">
                    <label for="judul" class="col-md-3 control-label">Judul*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="judul" name="judul" rows ="3"  readonly = "yes" placeholder="Judul" value = "<?php echo $eksplisit->judul;?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="deskripsi" class="col-md-3 control-label">deskripsi*</label>
                    <div class="col-md-9">                      
                      <textarea class="form-control" name="deskripsi"  rows ="6" readonly = "yes"  required ><?php echo $eksplisit->deskripsi; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="File" class="col-md-3 control-label">File *</label>
                    <div class="col-md-9">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tampilkan SOP</button>

                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <iframe  src="<?php echo base_url('eksplisit').'/'.$eksplisit->file;?>"  width="100%" height="500px" ></iframe>                          
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_konsulen" class="col-md-3 control-label">Tanggal Input *</label>
                    <div class="col-md-9">
                      <input type = "text"  name="tanggal_input" readonly = "yes" value = "<?php echo $eksplisit->tanggal_input ?>">
                    </div>
                  </div>                                                   
                  

                </div>
                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/Pengetahuan/eksplisit/delete') . '/' . $eksplisit->id; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Pengetahuan/eksplisit'); ?>">Tidak</a>
                  </center>
                </div>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
