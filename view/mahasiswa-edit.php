<?php

$id = @$_GET['id'];

$sql = mysql_query("SELECT * FROM tb_mahasiswa WHERE Id = $id");
$data = mysql_fetch_array($sql);
?>

<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Edit Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="controller/mahasiswa-edit.php?id=<?= $id; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$data['nama_mahasiswa'];?>" placeholder="Nama Lengkap" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIM</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" value="<?=$data['nim_id'];?>" placeholder="Nomor Induk Mahasiswa" name="nim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Kontak</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" value="<?=$data['nomor_hp'];?>" placeholder="Nomor Kontak Mahasiswa" name="hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" >Alamat</label>
                    <textarea class="form-control" placeholder="Alamat Mahasiswa" rows="3" name="alamat"><?=$data['alamat'];?></textarea>
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
                  <button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-pencil"></i> Edit Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>