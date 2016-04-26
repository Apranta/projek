
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>pegawai</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>">Pegawai</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header'>
              <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengguna/pegawai/tambah'); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah pegawai</a>
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

              <table id="table_pegawai" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nama pegawai</th>
                    <th>NIP</th>                  
                    <th>Email</th>
                    <th>No. Handphone</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php foreach ($list_pegawai as $pegawai) {                    
                    echo 
                      "<tr>".
                        "<td>".$pegawai->nama."</td>".
                        "<td>".$pegawai->nip."</td>".
                        "<td>".$pegawai->email."</td>".
                        "<td>".$pegawai->no_hp."</td>".
                        '<td><center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/pegawai/lihat/" . $pegawai->id) . '"><i class="ion ion-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/pegawai/ubah/" . $pegawai->id) . '"><i class="ion ion-edit"></i></a>';
                    echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/pegawai/hapus/" . $pegawai->id) . '"><i class="ion ion-trash-a"></i></a>';
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
