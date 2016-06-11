<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <center>
      <h1>Daftar Pengetahuan Eksplisit</h1>
    </center>
    <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengetahuan/tacit/tambah') ?>"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Pengetahuan</a>
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
              <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/lihat/" . $tacit->id_tacit) . '"><i class="glyphicon glyphicon-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/ubah" .'/'. $tacit->id_tacit) . '"><i class="glyphicon glyphicon-edit"></i></a>';
          if ($this->session->userdata('tipeuser') == 'administrator') {                      
            echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengetahuan/tacit/hapus/" . $tacit->id_tacit) . '"><i class="glyphicon glyphicon-trash-a"></i></a>';
          }
          echo '</center></td>'.
            "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <?php $this->load->view('slate/includes/footer'); ?>