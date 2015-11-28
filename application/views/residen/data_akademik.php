
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Data Akademik</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Residen</li>
      <li class="active">Data Akademik</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Logbook</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <thead>
                <th>Kasus</th>
                <th>Jumlah Kasus</th>
              </thead>
              <?php 
              $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
              $query = $this->db->query("SELECT * FROM evaluasi WHERE id_residen = $id");
              $total = 0;
              foreach ($query->result() as $row)
              {
               $kasus_elektif = $row->kasus_elektif;
               $kasus_darurat = $row->kasus_darurat;
               $kasus_umum = $row->kasus_umum;
               $kasus_regional = $row->kasus_regional;
               $kasus_bedah_umum = $row->kasus_bedah_umum;
               $kasus_obstetri= $row->kasus_obstetri;
               $kasus_pediatri = $row->kasus_pediatri;
               $kasus_saraf = $row->kasus_saraf;
               $kasus_thoraks = $row->kasus_thoraks;
               $kasus_khusus= $row->kasus_khusus;
               $kasus_icu = $row->kasus_icu;
               $kasus_bedah_icu = $row->kasus_bedah_icu;
               $kasus_kateter_intra = $row->kasus_kateter_intra;
               $kasus_kateter_vena = $row->kasus_kateter_vena;
               $kasus_intubasi_sulit = $row->kasus_intubasi_sulit;

               $total += $row->kasus_elektif;
               $total += $row->kasus_darurat;
               $total += $row->kasus_umum;
               $total += $row->kasus_regional;
               $total += $row->kasus_bedah_umum;
               $total += $row->kasus_obstetri;
               $total += $row->kasus_pediatri;
               $total += $row->kasus_saraf;
               $total += $row->kasus_thoraks;
               $total += $row->kasus_khusus;
               $total += $row->kasus_icu;
               $total += $row->kasus_bedah_icu;
               $total += $row->kasus_kateter_intra;
               $total += $row->kasus_kateter_vena;
               $total += $row->kasus_intubasi_sulit;
             }
             ?>
             <tr>
              <td>Kasus Elektif</td>
              <td><?php echo $kasus_elektif ?></td>
            </tr>
            <tr>
              <td>Kasus Darurat</td>
              <td><?php echo $kasus_darurat ?></td>
            </tr>
            <tr>
              <td>Kasus Umum</td>
              <td><?php echo $kasus_umum ?></td>
            </tr>
            <tr>
              <td>Kasus Regional</td>
              <td><?php echo $kasus_regional ?></td>
            </tr>
            <tr>
              <td>Kasus Bedah Umum</td>
              <td><?php echo $kasus_bedah_umum ?></td>
            </tr>
            <tr>
              <td>Kasus Obstetri</td>
              <td><?php echo $kasus_obstetri ?></td>
            </tr>
            <tr>
              <td>Kasus Pediatri</td>
              <td><?php echo $kasus_pediatri ?></td>
            </tr>
            <tr>
              <td>Kasus Saraf</td>
              <td><?php echo $kasus_saraf ?></td>
            </tr>
            <tr>
              <td>Kasus Thoraks</td>
              <td><?php echo $kasus_thoraks ?></td>
            </tr>
            <tr>
              <td>Kasus Khusus</td>
              <td><?php echo $kasus_khusus ?></td>
            </tr>
            <tr>
              <td>Kasus ICU</td>
              <td><?php echo $kasus_icu ?></td>
            </tr>
            <tr>
              <td>Kasus Bedah ICU</td>
              <td><?php echo $kasus_bedah_icu ?></td>
            </tr>
            <tr>
              <td>Kasus Kateter Intra</td>
              <td><?php echo $kasus_kateter_intra ?></td>
            </tr>
            <tr>
              <td>Kasus Kateter Vena</td>
              <td><?php echo $kasus_kateter_vena ?></td>
            </tr>
            <tr>
              <td>Kasus Intubasi Sulit</td>
              <td><?php echo $kasus_intubasi_sulit ?></td>
            </tr>
            <tr>
              <td>Total</td>
              <td><?php echo $total ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-8 col-xs-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Laporan Kegiatan</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-hover">
            <!-- <table class="table table-striped table-bordered table-hover"> -->
            <thead>
              <th class="col-md-3"></th>
              <?php
              for($i =1;$i<=10;$i++)
              {
                echo "
                <th colspan = '2'><b><center> Semester ".$i."</centar></b></th>";
              }
              ?>
            </thead>

            <tr>
              <td></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                echo "
                <td><b><center>1</center></b></td>
                <td><b><center>2</center></b></td>
                ";
              }
              ?>
            </tr>

            <tr>
              <td><b>Textbook Reading</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $total = 0;

                $query = $this->db->query("SELECT COUNT( id ) as total FROM kegiatan_ilmiah WHERE id_residen = $id and semester =$i  and jenis_kegiatan = 1");
                $total =  $query->row()->total;

                if($total==0)
                {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  ";
                }
                elseif ($total==1) {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }elseif ($total==2) {
                  echo "<td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Journal Reading</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $total = 0;

                $query = $this->db->query("SELECT COUNT( id ) as total FROM kegiatan_ilmiah WHERE id_residen = $id and semester =$i and jenis_kegiatan = 2");
                $total =  $query->row()->total;

                if($total==0)
                {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  ";
                }
                elseif ($total==1) {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }elseif ($total==2) {
                  echo "<td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Laporan Kasus</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $total = 0;

                $query = $this->db->query("SELECT COUNT( id ) as total FROM kegiatan_ilmiah WHERE id_residen = $id and semester =$i and jenis_kegiatan = 3");
                $total =  $query->row()->total;

                if($total==0)
                {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  ";
                }
                elseif ($total==1) {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }elseif ($total==2) {
                  echo "<td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Referat</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $total = 0;

                $query = $this->db->query("SELECT COUNT( id ) as total FROM kegiatan_ilmiah WHERE id_residen = $id and semester =$i and jenis_kegiatan = 4");
                $total =  $query->row()->total;

                if($total==0)
                {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  ";
                }
                elseif ($total==1) {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }elseif ($total==2) {
                  echo "<td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Tugas Imiah</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $total = 0;

                $query = $this->db->query("SELECT COUNT( id ) as total FROM kegiatan_ilmiah WHERE id_residen = $id and semester =$i and jenis_kegiatan = 5");
                $total =  $query->row()->total;

                if($total==0)
                {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  ";
                }
                elseif ($total==1) {
                  echo "<td class='bg-red text-center'><i class='fa fa-times'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }elseif ($total==2) {
                  echo "<td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  <td class='bg-green text-center'><i class='fa fa-check'></i></td>
                  ";
                }
              }
              ?>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Buku Harian</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-hover">
            <!-- <table class="table table-striped table-bordered table-hover"> -->
            <tr>
              <td><b>Kegiatan</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                echo "<td><b><center>Semester ".$i."</center></b></td>";
              }
              ?>
            </tr>

            <tr>
              <td><b>Morning Report</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $query = $this->db->query("SELECT jumlah_jam_report_smt".$i." FROM evaluasi WHERE id_residen = $id");
                $total = 0;
                foreach ($query->result() as $row)
                {
                  $jumlah_jam_report = "jumlah_jam_report_smt".$i;

                  echo "<td> ".$row->$jumlah_jam_report." Menit </td>";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Tugas Ok Elektif</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $query = $this->db->query("SELECT jumlah_jam_tugas_smt".$i." FROM evaluasi WHERE id_residen = $id");
                $total = 0;
                foreach ($query->result() as $row)
                {
                  $jumlah_jam_tugas = "jumlah_jam_tugas_smt".$i;

                  echo "<td> ".$row->$jumlah_jam_tugas." Menit </td>";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Visite Preoperatif</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $query = $this->db->query("SELECT jumlah_jam_visite_smt".$i." FROM evaluasi WHERE id_residen = $id");
                $total = 0;
                foreach ($query->result() as $row)
                {
                  $jumlah_jam_visite = "jumlah_jam_visite_smt".$i;

                  echo "<td> ".$row->$jumlah_jam_visite." Menit </td>";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Diskusi Preoperatif</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $query = $this->db->query("SELECT jumlah_jam_diskusi_smt".$i." FROM evaluasi WHERE id_residen = $id");
                $total = 0;
                foreach ($query->result() as $row)
                {
                  $jumlah_jam_diskusi = "jumlah_jam_diskusi_smt".$i;

                  echo "<td> ".$row->$jumlah_jam_diskusi." Menit </td>";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Tugas Jaga</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $query = $this->db->query("SELECT jumlah_jam_jaga_smt".$i." FROM evaluasi WHERE id_residen = $id");
                $total = 0;
                foreach ($query->result() as $row)
                {
                  $jumlah_jam_jaga = "jumlah_jam_jaga_smt".$i;

                  echo "<td> ".$row->$jumlah_jam_jaga." Menit </td>";
                }
              }
              ?>
            </tr>
            <tr>
              <td><b>Belajar Mandiri</b></td>
              <?php
              for($i =1;$i<=10;$i++)
              {
                $id = $this->residen_model->get_residen_id($this->session->userdata('username'));
                $query = $this->db->query("SELECT jumlah_jam_belajar_smt".$i." FROM evaluasi WHERE id_residen = $id");
                $total = 0;
                foreach ($query->result() as $row)
                {
                  $jumlah_jam_belajar = "jumlah_jam_belajar_smt".$i;

                  echo "<td> ".$row->$jumlah_jam_belajar." Menit </td>";
                }
              }
              ?>
            </tr>
          </table>
        </div>
      </div>
    </div>
    
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
