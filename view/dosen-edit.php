<?php

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM tb_dosen WHERE Id = $id");
$data= mysql_fetch_array($sql);

?>

<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Edit Data Dosen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="controller/dosen-edit.php?id=<?= $id;?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $data['nama'];?>" name="nama" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIDN</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" value="<?= $data['nidn'];?>" name="nidn" placeholder="Nomor Induk Dosen Nasional">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Kontak</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $data['nomor_hp'];?>" name="hp" placeholder="Nomor Kontak Dosen">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Program Studi</label>
                    <select class="form-control" name="program_studi">
                      <option selected="true"><?= $data['program_studi'];?></option>
                      <option>Teknik Informatika</option>
                      <option>Sistem Informasi</option>
                      <option>Komputer Akuntansi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-pencil"></i> Edit Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>