<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Tambah Data Pembimbing Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="controller/pembimbing-add.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <select name="namadosen" class="form-control">
                        <?php
                        $q = mysql_query("SELECT * FROM tb_dosen");
                        while($y = mysql_fetch_assoc($q))
                        {
                        echo "<option value=".$y['nidn'].">".$y['nama']." - ".$y['nidn']."</option>";                          
                        }

                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mahasiswa</label>
                    <select name="namamahasiswa" class="form-control">
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
                    <label for="exampleInputPassword1">Jenis Bimbingan</label>
                    <select class="form-control" name="jenis">
                      <option>Kuliah Praktek</option>
                      <option>Skripsi</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" name="judul" class="form-control" required="true">
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-users"></i> Tambah Baru</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>