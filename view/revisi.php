  <?php

// session_start();

if($_SESSION['jabatan'] == 'mahasiswa')
{
}else
{

$id = @$_GET['id'];
$u = mysql_query("SELECT * FROM tb_bimbingan WHERE Id = $id");
$bi= mysql_fetch_assoc($u);

$ii = $bi['id_revisi'];


$rev = mysql_query("SELECT * FROM tb_revisi WHERE Id =$ii ORDER BY tanggal DESC");
$data = mysql_fetch_assoc($rev);
$idd = $data['Id'];

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
                		<p><a href="docs/<?= $bi['judul'].'-'.$bi['status'] ?>.pdf" target="_blank"><i class="fa fa-file"></i> - <?= $bi['judul'].'-'.$bi['status'] ?></a></p>
                		<label>Daftar Perubahan</label>
                			
                		<p style="text-align: justify;">
                			<?=$data['perubahan'];?>
                		</p>
                		<label>Daftar Revisi:</label>
                		<p>
                			<?=$data['revisi'];?>
                		</p>
                	</div>
              <form role="form" method="post" action="controller/revisi-add.php?id=<?=$id ?>">
                  
                    <label for="exampleInputPassword1" >Revisi:</label>
                    <textarea class="form-control" placeholder="Daftar Perubahan" rows="3" name="perubahan"></textarea>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-users"></i> Tambah Baru</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>

          <?php } ?>