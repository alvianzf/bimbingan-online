  <?php

// session_start();

  $nim = $_SESSION['nmor'];

if($_SESSION['jabatan'] == 'dosen')
{
  echo "Hanya untuk mahasiswa";
}else
{


  ?>


         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i>  Bimbingan Baru </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="controller/bimbingan-add.php?id=<?=$nim;?>" enctype="multipart/form-data">
                <div class="card-body">
                  
                    <label for="exampleInputPassword1" >Daftar Perubahan:</label>
                    <textarea class="form-control" placeholder="Daftar Perubahan" rows="3" name="perubahan"></textarea>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">Dokumen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="dokumen">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Dokumen</label>
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

          <?php } ?>