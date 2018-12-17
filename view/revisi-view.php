  <?php


$id = @$_GET['id'];

$rev = mysql_query("SELECT * FROM tb_bimbingan WHERE Id =$id");
$datas = mysql_fetch_assoc($rev);
$idd = $datas['id_revisi'];

$u = mysql_query("SELECT * FROM tb_revisi WHERE ID = $idd");
$data= mysql_fetch_assoc($u);

  ?>


         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Revisi </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">

                	<div class="form-group">
                    <p><a href="docs/<?= $datas['judul'].'-'.$datas['status'] ?>.pdf" target="_blank"><i class="fa fa-file"></i> : <?= $datas['judul'].'-'.$datas['status'] ?></a></p>
                		<label>Daftar Perubahan</label>
                			
                		<p style="text-align: justify;">
                			<?=$data['perubahan'];?>
                		</p>

                    <label>Daftar Revisi</label>
                      
                    <p style="text-align: justify;">
                      <?=$data['revisi'];?>
                    </p>
                	</div>
              <form role="form" method="post" action="controller/revisi-add.php?id=<?=$id?>">
                  
                    <!-- <label for="exampleInputPassword1" >Daftar Revisi:</label> -->
                    <!-- <textarea class="form-control" placeholder="Daftar Perubahan" rows="3" name="perubahan"></textarea> -->
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-users"></i> Tambah Baru</button> -->
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>