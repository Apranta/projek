<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <center>
      <h1>Daftar Pengetahuan Tacit</h1>
    </center>
    <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengetahuan/tacit/daftar') ?>"><i class="glyphicon glyphicon-edit"></i>&nbsp;&nbsp;&nbsp;Edit Pengetahuan</a>
    <table id="table_tacit" class="table table-bordered table-hover" >
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Nama</th>
          <th>Judul Tacit</th>
          <th>Masalah</th>
          <th>Solusi</th>                  
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
              "<td>".$tacit->solusi."</td>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <?php $this->load->view('slate/includes/footer'); ?>