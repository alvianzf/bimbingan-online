<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Tambah Mahasiswa Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="controller/mahasiswa-add.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIM</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nomor Induk Mahasiswa" name="nim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Kontak</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nomor Kontak Mahasiswa" name="hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" >Alamat</label>
                    <textarea class="form-control" placeholder="Alamat Mahasiswa" rows="3" name="alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Program Studi</label>
                    <select class="form-control" name="program_studi">
                      <option>Teknik Informatika</option>
                      <option>Sistem Informasi</option>
                      <option>Komputer Akuntansi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="exampleInputFile">
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
                  <button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-users"></i> Tambah Baru</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>