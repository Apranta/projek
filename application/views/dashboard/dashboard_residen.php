
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Dashboard
            <small>Selamat datang di <?php echo system_name; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>17</h3>
                  <p>
                    Jadwal Operasi Hari Ini
                  </p>
                </div>
                <div class="icon">
                  <i class="fa fa-medkit"></i>
                </div>
                <a href="<?php echo base_url('index.php/jadwal/jadwal_operasi'); ?>" class="small-box-footer"> Lihat semua jadwal operasi <i class="fa fa-arrow-circle-right"></i> </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
    
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
