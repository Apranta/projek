
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Pasien</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Komponen</li>
            <li class="active">Pasien</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header'>
              <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/komponen/pasien/tambah'); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Pasien</a>
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

              <table id="table_pasien" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No. Rekam Medis</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php foreach ($list_pasien as $pasien) {
                    echo 
                      "<tr>".
                        "<td>".$pasien->no_rm."</td>".
                        "<td>".$pasien->nama_pasien."</td>".
                        "<td>".$pasien->umur."</td>".
                        "<td>".$pasien->jenis_kelamin."</td>".
                        '<td><center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/komponen/pasien/lihat/" . $pasien->no_rm) . '"><i class="ion ion-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/komponen/pasien/ubah/" . $pasien->no_rm) . '"><i class="ion ion-edit"></i></a>';
                    if ($this->session->userdata('tipeuser') === "administrator") {
                      echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/komponen/pasien/hapus/" . $pasien->no_rm) . '"><i class="ion ion-trash-a"></i></a>';
                    }
                     echo '</center></td>'.
                      "</tr>";
                  }
                  ?>
                </tbody>

                <tfoot>
                  <tr>
                    <th>No. Rekam Medis</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Pilihan</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
