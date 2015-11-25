
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><?php echo $judulhalaman; ?></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Kompetensi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <?php if ($this->session->userdata('tipeuser') !== 'konsulen'): ?>
            <div class='box-header'>
              <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/kompetensi/tambah'); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Kompetensi</a>
            </div>
            <?php endif; ?>
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

              <table id="table_logbook" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>No. Rekam Medis</th>
                    <th>Stase</th>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <th>Residen</th>
                    <?php endif; ?>
                    <th>Diagnosis</th>
                    <th>Tindakan</th>
                    <th>Kompetensi</th>
                    <th>Catatan Residen</th>
                    <th>Catatan Konsulen</th>
                    <th>Paraf Konsulen</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>17-8-2015</td>
                    <td>001</td>
                    <td>Stase I</td>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <td>Residen</td>
                    <?php endif; ?>
                    <td>Diagnosis I</td>
                    <td>Tindakan I</td>
                    <td>Kompetensi Umum</td>
                    <td>Melakukan Kompetensi Umum</td>
                    <td>Catatan Konsulen</td>
                    <td>Paraf Konsulen</td>
                    <td>
                      <center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/kompetensi") . '"><i class="ion ion-search"></i></a>
                        <a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/kompetensi") . '"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/kompetensi") . '"><i class="ion ion-trash-a"></i></a>
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td>17-8-2015</td>
                    <td>001</td>
                    <td>Stase I</td>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <td>Residen</td>
                    <?php endif; ?>
                    <td>Diagnosis I</td>
                    <td>Tindakan I</td>
                    <td>Kompetensi Umum</td>
                    <td>Melakukan Kompetensi Umum</td>
                    <td>Catatan Konsulen</td>
                    <td>Paraf Konsulen</td>
                    <td>
                      <center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/kompetensi") . '"><i class="ion ion-search"></i></a>
                        <a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/kompetensi") . '"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/kompetensi") . '"><i class="ion ion-trash-a"></i></a>
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td>17-8-2015</td>
                    <td>001</td>
                    <td>Stase I</td>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <td>Residen</td>
                    <?php endif; ?>
                    <td>Diagnosis I</td>
                    <td>Tindakan I</td>
                    <td>Kompetensi Umum</td>
                    <td>Melakukan Kompetensi Umum</td>
                    <td>Catatan Konsulen</td>
                    <td>Paraf Konsulen</td>
                    <td>
                      <center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/kompetensi"); ?>"><i class="ion ion-search"></i></a>
                        <a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/kompetensi"); ?>"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/kompetensi"); ?>"><i class="ion ion-trash-a"></i></a>
                      </center>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Tanggal</th>
                    <th>No. Rekam Medis</th>
                    <th>Stase</th>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <th>Residen</th>
                    <?php endif; ?>
                    <th>Diagnosis</th>
                    <th>Tindakan</th>
                    <th>Kompetensi</th>
                    <th>Catatan Residen</th>
                    <th>Catatan Konsulen</th>
                    <th>Paraf Konsulen</th>
                    <th>Pilihan</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
