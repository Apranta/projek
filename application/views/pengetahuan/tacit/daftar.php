
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pengetahuan</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Pengetahuan</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Pengetahuan</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit'); ?>">Tacit</a></li>
          </ol>
        </section>  

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header'>
              <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengetahuan/tacit/tambah') ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Pengetahuan</a>
            </div>

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
                  <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
                  <?php echo $this->session->flashdata('gagal');?>
                </div>
              <?php endif; ?>

              <table id="table_tacit" class="table table-bordered table-hover" >
                <thead>
                  <tr>
                    <th >Tanggal</th>
                    <th>Nama</th>
                    <th>Judul Tacit</th>
                    <th>Masalah</th>
                    <th>Solusi</th>  
                    <th>Pilihan</th>                  
                  </tr>
                </thead>
                
                <tbody>
                  <?php foreach ($list_tacit as $tacit) {
                    echo 
                      "<tr>".
                        "<td>".$tacit->tanggal_input."</td>".
                        "<td>".$tacit->nama."</td>".
                        "<td>".$tacit->judul."</td>".
                        "<td>".$tacit->masalah."</td>".
                        "<td>".$tacit->solusi."</td>".                        
                        '<td><center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/lihat/" . $tacit->id_tacit) . '"><i class="ion ion-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/ubah" .'/'. $tacit->id_tacit) . '"><i class="ion ion-edit"></i></a>';
                    if ($this->session->userdata('tipeuser') == 'administrator') {                      
                      echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/hapus/" . $tacit->id_tacit) . '"><i class="ion ion-trash-a"></i></a>';
                    }
                    echo '</center></td>'.
                      "</tr>";
                  }
                  ?>
                </tbody>

                <tfoot>                  
                </tfoot>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
