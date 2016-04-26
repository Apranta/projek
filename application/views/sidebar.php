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
              <a><?php echo ucwords($this->session->userdata('tipeuser'));?></a>              
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

          <!-- Pengguna -->
          <?php if ($this->session->userdata('tipeuser') === "administrator"): ?>
          
          <?php if ($judulhalaman === "Sekertaris" || $judulhalaman === "Pegawai" || $judulhalaman === "Administrator" || $judulhalaman === "Semua Pengguna"): ?>
          <li class="treeview active">
          <?php else: ?>
          <li class="treeview">
          <?php endif; ?>
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Pengguna</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <?php if ($judulhalaman === "Sekertaris"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengguna/sekertaris'); ?>"><i class="fa fa-circle-o"></i> Sekertaris</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengguna/sekertaris'); ?>"><i class="fa fa-circle-o"></i> Sekertaris</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "Pegawai"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengguna/pegawai'); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "Administrator"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengguna/admin'); ?>"><i class="fa fa-circle-o"></i> Administrator</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengguna/admin'); ?>"><i class="fa fa-circle-o"></i> Administrator</a></li>
              <?php endif; ?>

            </ul>
          </li>
          <?php endif; ?>


          <!-- Pengetahuan -->
          <?php if($judulhalaman=== "Tacit" || $judulhalaman=== "Eksplisit" ):?>
          <li class = "treeview active">
          <?php else:?>
          <li class = "treeview">
          <?php endif;?>
          <a href="#">
            <i class = "fa fa-user-md"></i>
            <span>Pengetahuan</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>

          <ul class="treeview-menu">
              <?php if ($judulhalaman == "Tacit"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/tacit');?>"><i class="fa fa-circle-o"></i> Tacit</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengetahuan/tacit');?>"><i class="fa fa-circle-o"></i> Tacit</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman == "Eksplisit"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengetahuan/eksplisit');?>"><i class="fa fa-circle-o"></i> Eksplisit</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengetahuan/eksplisit');?>"><i class="fa fa-circle-o"></i> Eksplisit</a></li>
              <?php endif; ?>
            </ul>

          </li>
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

          <!-- Reward -->        
          <?php if ($this->session->userdata('tipeuser') ==="sekertaris"): ?>  
          <?php if ($judulhalaman === "Reward"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/reward/reward'); ?>">
              <i class="fa fa-user-md"></i>
              <span>Reward</span>
            </a>
          </li>          
        <?php endif;?>



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
      
    </aside>
