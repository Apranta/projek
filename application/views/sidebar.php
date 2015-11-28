
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="info">
            <center><img src="<?php echo base_url('foto/'.$this->session->userdata('foto')); ?>" class="img-rounded" alt="User Image" width="50"/></center>
          </div>
          <div class="info">
            <center>
              <p><?php echo $this->session->userdata('nama');?></p>

              <?php if($this->session->userdata('tipeuser') == 'residen'): ?>
                <?php if($this->session->userdata('tingkat') == '1'): ?>
                  <small class="label label-danger">Residen Tingkat 1</small>
                <?php elseif($this->session->userdata('tingkat') == '2'): ?>
                  <small class="label label-warning">Residen Tingkat 2</small>
                <?php elseif($this->session->userdata('tingkat') == '3'): ?>
                  <small class="label label-success">Residen Tingkat 3</small>
                <?php else: ?>
                  <a>Residen</a>
                <?php endif; ?>
              <?php else: ?>
                <a><?php echo ucwords($this->session->userdata('tipeuser'));?></a>
              <?php endif; ?>
            </center>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          
          <!-- Dashboard -->
          <?php if ($judulhalaman === "Dashboard"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url(); ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <!--Catatan Harian -->
           <?php if ($judulhalaman === "Catatan"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/kompetensi'); ?>">
              <i class="fa fa-hospital-o"></i>
              <span>Catatan Harian</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <?php if ($judulhalaman === "pasien_bangsal "): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/pasien'); ?>"><i class="fa fa-circle-o"></i> Pasien Bangsal</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/pasien'); ?>"><i class="fa fa-circle-o"></i> Pasien Bangsal</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "pasien_poliklinik"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/operator'); ?>"><i class="fa fa-circle-o"></i> Pasien Poliklinik</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/operator'); ?>"><i class="fa fa-circle-o"></i> Pasien Poliklinik</a></li>
              <?php endif; ?>
          
              <?php if ($judulhalaman === "pasien_igd"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/ruangan'); ?>"><i class="fa fa-circle-o"></i> Pasien IGD</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/ruangan'); ?>"><i class="fa fa-circle-o"></i> Pasien IGD</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "jaga_malam "): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/pasien'); ?>"><i class="fa fa-circle-o"></i> Jaga Malam</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/pasien'); ?>"><i class="fa fa-circle-o"></i> Jaga Malam</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "konsul_antar_bagian"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/operator'); ?>"><i class="fa fa-circle-o"></i> Konsul Antar Bagian</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/operator'); ?>"><i class="fa fa-circle-o"></i> Konsul Antar Bagian</a></li>
              <?php endif; ?>
          
              <?php if ($judulhalaman === "laporan_jaga"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/ruangan'); ?>"><i class="fa fa-circle-o"></i> Laporan Jaga</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/ruangan'); ?>"><i class="fa fa-circle-o"></i> Laporan Jaga</a></li>
              <?php endif; ?>
            </ul>

          </li>



          <!-- Kompetensi -->
          <?php if ($judulhalaman === "Kompetensi"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/kompetensi'); ?>">
              <i class="fa fa-user-md"></i>
              <span>Kompetensi</span>
            </a>


          </li>

          <!-- Monitoring -->
          <?php if ($judulhalaman === "Monitoring"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/monitoring'); ?>">
              <i class="fa fa-desktop"></i>
              <span>Monitoring</span>
            </a>
          </li>

          <!-- Evaluasi -->
          <?php if ($judulhalaman === "Evaluasi"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/evaluasi'); ?>">
              <i class="fa fa-edit"></i>
              <span>Evaluasi</span>
            </a>
          </li>

          <!-- Report -->
          <?php if ($judulhalaman === "Report"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/report'); ?>">
              <i class="fa fa-file-text-o"></i>
              <span>Report</span>
            </a>
          </li>

          <!-- Jadwal Operasi -->
          <?php if ($judulhalaman === "Jadwal Operasi"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/jadwal_operasi'); ?>">
              <i class="fa fa-clock-o"></i>
              <span>Jadwal Operasi</span>
            </a>
          </li>

          <!-- Komponen -->
          <?php if ($judulhalaman === "Pasien" || $judulhalaman === "Operator" || $judulhalaman === "Ruangan"): ?>
          <li class="treeview active">
          <?php else: ?>
          <li class="treeview">
          <?php endif; ?>
            <a href="#">
              <i class="fa fa-hospital-o"></i>
              <span>Komponen</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
        
            <ul class="treeview-menu">
              <?php if ($judulhalaman === "Pasien"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/pasien'); ?>"><i class="fa fa-circle-o"></i> Pasien</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/pasien'); ?>"><i class="fa fa-circle-o"></i> Pasien</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "Operator"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/operator'); ?>"><i class="fa fa-circle-o"></i> Operator</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/operator'); ?>"><i class="fa fa-circle-o"></i> Operator</a></li>
              <?php endif; ?>
          
              <?php if ($judulhalaman === "Ruangan"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/komponen/ruangan'); ?>"><i class="fa fa-circle-o"></i> Ruangan</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/komponen/ruangan'); ?>"><i class="fa fa-circle-o"></i> Ruangan</a></li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- Profil -->
          <?php if ($judulhalaman === "Profil"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/profil'); ?>">
              <i class="fa fa-user-md"></i>
              <span>Profil</span>
            </a>
          </li>

          <!-- Ubah Password -->
          <?php if ($judulhalaman === "Ubah Password"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/ubah_password'); ?>">
              <i class="fa fa-key"></i>
              <span>Ubah Password</span>
            </a>
          </li>
          
      </section>
      <!-- /.sidebar -->
    </aside>
