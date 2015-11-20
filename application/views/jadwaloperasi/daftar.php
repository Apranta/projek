
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Jadwal Operasi</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Jadwal Operasi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header'>
              <h3 class="box-title">Pilih Tanggal</h3>
            </div>

            <div class="box-body">
              <form action="<?php echo base_url("index.php/jadwal/jadwal_operasi/daftar"); ?>" method="GET">
                <input id="field-hari" name="hari" type="number" value="<?php echo $hari; ?>" placeholder="Tanggal" style="width: 75px !important; height:25px;"/>
                <select id="field-bulan" name="bulan" style="width:100px !important; height:25px;" required>
                <?php echo $bulan; ?>
                </select>
                <select id="field-tahun" name="tahun" style="width:100px !important; height:25px;" required>
                <?php echo $tahun; ?>
                </select>
                <input id="form-button-print" type="submit" value="Tampilkan Data" class="btn btn-primary"/>
              </form>
            </div>
          </div>

          <div class='box box-primary'>
            <div class='box-header'>
              <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/jadwal/jadwal_operasi/tambah'); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Jadwal Operasi</a>
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
                  <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                  <?php echo $this->session->flashdata('gagal');?>
                </div>
              <?php endif; ?>

              <table id="table_jadwaloperasi" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Ronde</th>
                    <th>Kamar Operasi</th>
                    <th>No. Rekam Medis</th>
                    <th>ASA</th>
                    <th>Rencana Operasi</th>
                    <th>Konsulen Anestesi<br>(DPJP)</th>
                    <th>Pelapor</th>
                    <th>Operator</th>
                    <th>Teknik Anestesi</th>
                    <th>Residen</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>18-08-2015</td>
                    <td>Ronde 1</td>
                    <td>Kamar 1</td>
                    <td>001</td>
                    <td>ASA I</td>
                    <td>Rencana Operasi 1</td>
                    <td>Konsulen 1</td>
                    <td>Pelapor 1</td>
                    <td>Operator 1</td>
                    <td>Teknik Anestesi 1</td>
                    <td>Residen 1</td>
                    <td>
                      <center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/jadwal_operasi"); ?>"><i class="ion ion-search"></i></a>
                        <a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/jadwal_operasi"); ?>"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/jadwal_operasi"); ?>"><i class="ion ion-trash-a"></i></a>
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td>18-08-2015</td>
                    <td>Ronde 1</td>
                    <td>Kamar 1</td>
                    <td>001</td>
                    <td>ASA I</td>
                    <td>Rencana Operasi 1</td>
                    <td>Konsulen 1</td>
                    <td>Pelapor 1</td>
                    <td>Operator 1</td>
                    <td>Teknik Anestesi 1</td>
                    <td>Residen 1</td>
                    <td>
                      <center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/jadwal_operasi"); ?>"><i class="ion ion-search"></i></a>
                        <a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/jadwal_operasi"); ?>"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="<?php echo base_url("index.php/jadwal_operasi"); ?>"><i class="ion ion-trash-a"></i></a>
                      </center>
                    </td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <th>Tanggal</th>
                    <th>Ronde</th>
                    <th>Kamar Operasi</th>
                    <th>No. Rekam Medis</th>
                    <th>ASA</th>
                    <th>Rencana Operasi</th>
                    <th>Konsulen Anestesi<br>(DPJP)</th>
                    <th>Pelapor</th>
                    <th>Operator</th>
                    <th>Teknik Anestesi</th>
                    <th>Residen</th>
                    <th>Pilihan</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
