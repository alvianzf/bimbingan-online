<?php

$id = $_SESSION['user_id'];
$res = @$_GET['response'];

if($res == 'true')
{
  echo '<script>swal("Berhasil", "Mengubah Password!", "success");</script>';
}

?>

<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-key"></i>  Ubah Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="controller/change_pass.php?id=<?=$id?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password Baru</label>
                    <input type="password" class="form-control" placeholder="Password Baru" name="pass">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-key"></i> Ubah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>