<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Tambah Dosen Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="controller/dosen-add.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIDN</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="nidn" placeholder="Nomor Induk Dosen Nasional">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Kontak</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="hp" placeholder="Nomor Kontak Dosen">
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
                  <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-users"></i> Tambah Baru</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>