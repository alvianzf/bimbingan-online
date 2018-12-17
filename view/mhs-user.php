<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Tambah Pengguna Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="controller/mhs-user-add.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <select name="nim" class="form-control">
                        <?php
                        $q = mysql_query("SELECT * FROM tb_mahasiswa");
                        while($y = mysql_fetch_assoc($q))
                        {
                        echo "<option value=".$y['nim_id'].">".$y['nama_mahasiswa']." - ".$y['nim_id']."</option>";                          
                        }

                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Kata Sandi">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info pull-right"> <i class="fa fa-users"></i> Tambah Baru</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>