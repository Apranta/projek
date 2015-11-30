
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Perawatan Pasien Bangsal</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Catatan Harian</li>
            <li class="active">Perawatan Pasien Bangsal</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <?php if ($this->session->userdata('tipeuser') !== "konsulen"): ?>
            <div class='box-header'>
              <a class="btn btn-primary btn-flat" href=<?php echo base_url('index.php/pasien_bangsal/tambah') ?>><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Perawatan Pasien Bangsal</a>
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

              <table id="table_pasien_bangsal" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <th>Residen</th>
                    <?php endif; ?>
                    <th>Kegiatan</th>
                    <th>Catatan Residen</th>
                    <?php if ($this->session->userdata('tipeuser') !== "konsulen"): ?>
                    <th>Konsulen</th>
                    <?php endif; ?>
                    <th>Catatan Konsulen</th>
                    <th>Paraf Konsulen</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php foreach ($list_bukuharian as $bukuharian) {
                    if ($bukuharian->paraf_konsulen === "1") $bukuharian->paraf_konsulen = "Ya";
                    else $bukuharian->paraf_konsulen = "Tidak";

                    echo 
                      "<tr>".
                        "<td>".date("d-m-Y", strtotime($bukuharian->tgl_mulai))."</td>".
                        "<td>".date("d-m-Y", strtotime($bukuharian->tgl_selesai))."</td>".
                        "<td>".$bukuharian->jam_mulai."</td>".
                        "<td>".$bukuharian->jam_siap."</td>";

                    if ($this->session->userdata('tipeuser') !== "residen")
                    {
                      echo "<td>".$bukuharian->nama_residen."</td>";
                    }

                    echo "<td>".$bukuharian->modul."</td>".
                        "<td>".$bukuharian->catatan_residen."</td>";

                    if ($this->session->userdata('tipeuser') !== "konsulen")
                    {
                      echo "<td>".$bukuharian->nama_konsulen."</td>";
                    }

                    echo "<td>".$bukuharian->catatan_konsulen."</td>".
                        "<td>".$bukuharian->paraf_konsulen."</td>".
                        '<td><center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href=<?php echo base_url('index.php/pasien_bangsal/lihat')?>> <i class="ion ion-search"></i></a>';
                    
                    if($this->session->userdata('tipeuser') === "administrator")
                    {
                      echo '<a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="#"><i class="ion ion-edit"></i></a><a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/catatanharian/buku_harian/hapus/" . $bukuharian->id) . '"><i class="ion ion-trash-a"></i></a>';
                    }
                    elseif($this->session->userdata('tipeuser') === "konsulen")
                    {
                      if ($bukuharian->paraf_konsulen === "Tidak")
                      {
                        echo '<a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="#"><i class="ion ion-edit"></i></a>';
                      }
                    }
                    elseif($this->session->userdata('tipeuser') === "residen")
                    {
                      if ($bukuharian->paraf_konsulen === "Tidak")
                      {
                        echo '<a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="#"><i class="ion ion-edit"></i></a><a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/catatanharian/buku_harian/hapus/" . $bukuharian->id) . '"><i class="ion ion-trash-a"></i></a>';
                      }
                    }
                    
                    echo "</center></td></tr>";
                  }
                  ?>
                </tbody>

                <tfoot>
                  <tr>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <?php if ($this->session->userdata('tipeuser') !== "residen"): ?>
                    <th>Residen</th>
                    <?php endif; ?>
                    <th>Kegiatan</th>
                    <th>Catatan Residen</th>
                    <?php if ($this->session->userdata('tipeuser') !== "konsulen"): ?>
                    <th>Konsulen</th>
                    <?php endif; ?>
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
