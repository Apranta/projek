
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Dashboard
            <small>Selamat datang di <?php echo system_name; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li> <br>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class = "row-md-12">
        <div class = "box-body">
          <div class="box">
          <div class="box-header with-border">
          <h3 class="box-title">Cari Pengetahuan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          </div>
          <form method = "post" action = "<?php echo base_url('index.php/dashboard/searching');?>">
          <div class="box-body" style="display: block;">
          <div class="input-group">
          
                  <input type="text" name="kata_kunci"  placeholder="masukkan kata kunci" class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Cari</button>
                      </span>            
          </div>
        </div>        
        </form>

      </div> 
        
        <?php if(!empty($text_tacit)): ?>    
        <?php $n = max(array_keys($text_tacit)); ?>
        <?php 
          if($n>2)
          {
            $n=2;
          }
        ?>
        
        <?php for($i=0;$i<=$n;$i++)
        {   

          if($sortValue_tacit[$i] != 0)
          {                                  
            echo "<div class=col-sm-6 col-sm-6>";            
            echo "<div class=box box-primary>";                        
            echo "<div class=box-header>";              
            echo "<h5><strong>".$text_tacit[$temp_index_tacit[$i]]->judul."</strong></h5>";
            echo "<strong> Masalah : </strong><br>";
            echo "<p align = justify>".$text_tacit[$temp_index_tacit[$i]]->masalah."</p>";            
            echo "<strong> Solusi : </strong><br>";
            echo "<p align = justify>".$text_tacit[$temp_index_tacit[$i]]->solusi."</p>";
            echo "</div>";
            echo "</div>";                        
            echo "</div>";   
          }                  
        }                
        ?> 
        <?php else: ?>                            
        <?php
          echo "<div class=col-sm-6 col-sm-6>";            
            echo "<div class=box box-primary>";                        
            echo "<div class=box-header>";              
            echo "<h5><strong>".$last_tacit->judul."</strong></h5>";
            echo "<strong> Masalah : </strong><br>";
            echo "<p align = justify>".$last_tacit->masalah."</p>";            
            echo "<strong> Solusi : </strong><br>";
            echo "<p align = justify>".$last_tacit->solusi."</p>";
            echo "</div>";
            echo "</div>";                        
            echo "</div>";   
        ?>
        <?php endif; ?>                            

      
        <?php if(!empty($text_eksplisit)): ?>    

        <?php $n = max(array_keys($text_eksplisit)); ?>
        <?php 
          if($n>2)
          {
            $n=2;
          }
        ?>
        <?php for($i=0;$i<=$n;$i++)
        {   
          if($sortValue_eksplisit[$i] != 0)
          {                                 

            echo "<div class=col-sm-6 col-sm-6>";            
            echo "<div class=box box-primary>";                        
            echo "<div class=box-header>";              
            echo "<h5><strong>".$text_eksplisit[$temp_index_eksplisit[$i]]->judul."</strong></h5>";
            echo "<strong> Masalah : </strong><br>";
            echo "<p align = justify>".$text_eksplisit[$temp_index_eksplisit[$i]]->deskripsi."</p>";            
            echo "<strong> Solusi : </strong><br><br>";            
            ?>
            <div class="form-group">
                    
                    <div>      
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tampilkan SOP</button>                
                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                       <?php echo "<iframe  src=".base_url("eksplisit")."/".$text_eksplisit[$temp_index_eksplisit[$i]]->solusi."  width=100% height=500px ></iframe>";   ?>             
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
          </div>                                        
            <?php 
            echo "</div>";
            echo "</div>";                        
            echo "</div>";   
          }                  
        }                
        ?> 

        <?php else: ?>  
        <?php                          
        echo "<div class=col-sm-6 col-sm-6>";            
            echo "<div class=box box-primary>";                        
            echo "<div class=box-header>";              
            echo "<h5><strong>".$last_eksplisit->judul."</strong></h5>";
            echo "<strong> Deskripsi : </strong><br>";
            echo "<p align = justify>".$last_eksplisit->deskripsi."</p>";            
            echo "<strong> File : </strong><br><br>";            
            ?>
            <div class="form-group">
                    
                    <div>      
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tampilkan SOP</button>                
                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                       <?php echo "<iframe  src=".base_url("eksplisit")."/".$last_eksplisit->file."  width=100% height=500px ></iframe>";   ?>             
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
          </div>                                                                                      
        <?php endif; ?>                            
      </div>      
      </section>                      
      </div><!-- /.content-wrapper -->

