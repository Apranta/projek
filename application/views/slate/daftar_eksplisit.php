<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <center>
      <h1>Pengetahuan Eksplisit</h1>
    </center>
    <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengetahuan/eksplisit/tambah') ?>"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Pengetahuan</a>
    <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/dashboard/list_pengetahuan') ?>"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;&nbsp;Daftar Pengetahuan</a>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Nama</th>
          <th>Judul Eksplisit</th>
          <th>Deskripsi</th>
          <th>File</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list_eksplisit as $Eksplisit) {
          echo 
            "<tr>".
              "<td>".$Eksplisit->tanggal_input."</td>".
              "<td>".$Eksplisit->nama."</td>".
              "<td>".$Eksplisit->judul."</td>".
              "<td>".substr($Eksplisit->deskripsi, 0, 100)."</td>".
              "<td>".$Eksplisit->file."</td>".                        
              '<td><center>
              <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/Eksplisit/detail/" . $Eksplisit->id_eksplisit) . '"><i class="glyphicon glyphicon-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/Eksplisit/ubah" .'/'. $Eksplisit->id_eksplisit) . '"><i class="glyphicon glyphicon-edit"></i></a>';
          if ($this->session->userdata('tipeuser') == 'administrator' || $this->session->userdata('tipeuser') == 'sekertaris') {                      
            echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/Eksplisit/hapus/" . $Eksplisit->id_eksplisit) . '"><i class="glyphicon glyphicon-trash"></i></a>';
          }
          echo '</center></td>'.
            "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

<?php $this->load->view('slate/includes/footer'); ?>