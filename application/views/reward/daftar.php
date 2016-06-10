      <div class="content-wrapper">
       <section class="content-header">
          <h1>Reward</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reward</li>            
          </ol>
        </section>

        <section class="content">

          <div class="row">
          <div class = "col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jumlah Tacit</th>
                    <th>Jumlah Eksplisit</th>
                    <th>Total</th>
                    <th>Reward</th>                    
                  </tr>
                  </thead>
                  <tbody>                    

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="exampleModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">                              
                              <input type="hidden" class="form-control" id="id_pengguna">
                            </div>

                            <div class="form-group">
                              <label for="reward" class="control-label">Reward:</label>
                              <textarea class="form-control" id="reward"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="deskripsi" class="control-label">Deskripsi:</label>
                              <textarea class="form-control" id="deskripsi"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button type="button" id="simpan_reward" class="btn btn-primary">Kirim Reward</button>
                        </div>
                      </div>
                    </div>
                  </div>                      
                                      <?php $i=0?>
                  <?php foreach ($pengguna as $daftar_pengguna) 
                  {
                  echo "<tr>".                                          
                    "<td>".$daftar_pengguna->nama."</td>".
                    "<td>".$totalTacit[$i]."</td>".
                    "<td>".$totalEksplisit[$i]."</td>".
                    "<td>".$total[$i]."</td>";
                    if($total[$i] >= 2)
                    {
                      echo ' <td>                                        
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-nama='.$daftar_pengguna->nama.' data-id='.$daftar_pengguna->id_pengguna.'>Reward</button>
                  </td>  ';  
                      
                    }
                    else
                    {
                      echo '<td>
                        <a class="btn btn-danger btn-flat btn-sm" style="width:60px;"><i class= "fa-minus-square"></i></a>';  
                    }
                    
                  echo "</tr>";
                  $i++;
                  } ?>
                  </tbody>                  
                  <tr>                    
                    <th>Nama</th>
                    <th>Jumlah Tacit</th>
                    <th>Jumlah Eksplisit</th>
                    <th>Total</th>
                    <th>Reward</th>                    
                  </tr>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>            
          </div>
          </div>          




          <div class = "col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Rewarded</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
                        <ul class="products-list product-list-in-box">
                        
                                              
                    <?php if(!empty($daftar_reward))
                    {                      
                      $n = max(array_keys($daftar_reward));
                      for ($i=0; $i <=$n ; $i++) 
                      {                                                    
                        //echo $foto_pengguna[$i];       
                        echo '
                        <div class = "item">
                        <div class="product-img">
                        <img src="http://localhost/km/foto/'.$foto_pengguna[$i].'" alt="Product Image">
                        </div>
                        <a class="product-title">'.$nama_pengguna[$i].'</a><br>
                        <span>
                          '.$daftar_reward[$i]->deskripsi.'
                        </span>             
                        </div>                                                        
                        
                        ';                   
                      }
                    }
                    ?>  
                    </ul>
                        </div>                
                
            
            <!-- /.box-body -->
            <div class="box-footer text-center" style="display: block;">            
            </div>
          </div>
        </div>

            <!-- /.box-footer -->
          </div>
                </section>                      
      </div><!-- /.content-wrapper -->

