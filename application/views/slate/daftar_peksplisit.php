<?php $this->load->view('slate/includes/header'); ?>
	<?php $this->load->view('slate/includes/navbar'); ?>

  <div class="container">
    <center>
      <h1>Daftar Pengetahuan eksplisit</h1>
    </center>
    <a class="btn btn-primary btn-flat" href="<?php echo base_url('index.php/pengetahuan/eksplisit/daftar') ?>"><i class="glyphicon glyphicon-edit"></i>&nbsp;&nbsp;&nbsp;Edit Pengetahuan</a>
    <table id="table_eksplisit" class="table table-bordered table-hover" >
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Nama</th>
          <th>Judul eksplisit</th>
          <th>Masalah</th>
          <th>Solusi</th>                  
        </tr>
      </thead>
      
      <tbody>
        <?php foreach ($list_eksplisit as $eksplisit) {
          echo 
            "<tr>".
              "<td>".$eksplisit->tanggal_input."</td>".
              "<td>".$eksplisit->nama."</td>".
              "<td>".$eksplisit->judul."</td>".
              "<td>".$eksplisit->deskripsi."</td>".
              "<td>".$eksplisit->file."</td>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <?php $this->load->view('slate/includes/footer'); ?>