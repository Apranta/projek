<?php $this->load->view('slate/includes/header'); ?>
	<style type="text/css">
		#jumbotron {
			text-align: center;
			margin-top: -1.5%;
		}

		#search_form {
			width: 30%;
			margin: 0 auto;
			margin-bottom: 1%;
			margin-top: -1%;
		}
	</style>
	<?php $this->load->view('slate/includes/navbar'); ?>

	<div class="jumbotron" id="jumbotron">
		<img src="<?= base_url('assets/slate/img/dishub-kominfo.png') ?>" width="100" height="110">
		<h2>Selamat Datang di Knowledge Management System</h2>
	</div>
	<div id="search_section">
		<form method = "post" action = "<?php echo base_url('index.php/dashboard/search');?>">
          
          <div class="form-group" id="search_form">
			  <div class="input-group">
			    <input class="form-control" type="text" name="kata_kunci"  placeholder="masukkan kata kunci">
			    <span class="input-group-btn">
			      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			    </span>
			  </div>
			</div>
	                
        </form>
		
	</div>
	<div class="container well">
		<?php //if (isset($text_tacit, $text_eksplisit)): 
				if (count($text_tacit) != 0 or count($text_eksplisit != 0)):	?>
			<center>
				<h3>Cari Pengetahuan</h3>
			</center>
		<div class="row">
			<div class="col-md-6">
				<?php if (count($text_tacit) != 0): ?>
					<?php foreach ($text_tacit as $row): ?>
						<div class="box box-primary">
							<div class="box-header">
								<h5><strong><?= $row->judul ?></strong></h5>
								<strong>Masalah: </strong><br/>
								<p align="justify"><?= $row->masalah ?></p>
								<strong>Solusi: </strong><br/>
								<p align="justify"><?= $row->solusi ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<?php if (count($text_eksplisit) != 0): ?>
					<?php foreach ($text_eksplisit as $row): ?>
						<div class="box box-primary">
							<div class="box-header">
								<h5><strong><?= $row->judul ?></strong></h5>
								<strong>Deskripsi: </strong><br/>
								<p align="justify"><?= $row->deskripsi ?></p>
								<strong>Solusi: </strong><br/><br/>
								<div class="form-group">
				                    <div>      
				                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tampilkan SOP</button>                
				                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				                      <div class="modal-dialog modal-lg">
				                      <div class="modal-content">
				                       <?php echo "<iframe  src=".base_url("eksplisit")."/".$row->solusi."  width=100% height=500px ></iframe>";   ?>             
				                        </div>
				                      </div>
				                    </div>
				                    </div>
				                  </div>
								
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<!--
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
	                                                                                             
	        <?php endif; ?> -->
		</div>
		<?php else: ?>
		<center>
			<h3>List Pengetahuan</h3>
		</center>
		<div class="row">
			<?php if (isset($list_tacit)):  ?>
			<div class="col-md-6">
				<center>
					<h4>Pengetahuan Tacit</h4>
				</center>
				<?php foreach ($list_tacit as $row): ?>
					<div class="list-group">
					  <a href="<?= base_url('index.php/pengetahuan/tacit/detail/'.$row->id_tacit) ?>" class="list-group-item">
					    <h5 class="list-group-item-heading"><?= $row->judul ?></h5>
					    <p class="list-group-item-text">- 
					    	<?php  
					    		$pengguna = $this->pengguna_model->get_pengguna_name_by_id($row->id_pengguna);
					    		echo $pengguna;
					    	?>
					    </p>
					  </a>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
			<?php if (isset($list_eksplisit)): ?>
			<div class="col-md-6">
				<center>
					<h4>Pengetahuan Eksplisit</h4>
				</center>
				<?php foreach ($list_eksplisit as $row): ?>
					<div class="list-group">
					  <a href="<?= base_url('index.php/pengetahuan/eksplisit/detail/'.$row->id_eksplisit) ?>" class="list-group-item">
					    <h5 class="list-group-item-heading"><?= $row->judul ?></h5>
					    <p class="list-group-item-text">- 
					    	<?php  
					    		$pengguna = $this->pengguna_model->get_pengguna_name_by_id($row->id_pengguna);
					    		echo $pengguna;
					    	?>
					    </p>
					  </a>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>

<?php $this->load->view('slate/includes/footer'); ?>