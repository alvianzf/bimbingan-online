<?php 
$err = @$_GET['error'];
$del = @$_GET['delete'];

if ($err == 'false')
{
  echo '<script>swal("Berhasil", "menambahkan pembimbing", "success");</script>';
}else if($err =='true')
{
  echo '<script>swal("Gagal", "menambahkan pembimbing", "error");</script>';
}

if ($del == 'true')
{
  echo '<script>swal("Berhasil", "menghapus pembimbing", "success");</script>';
}

?>
          <div class="col-lg-8">
            <div class="card card-warning card-outline">
              <div class="card-body">
                <h5 class="card-title">Daftar Pembimbing</h5>

                <p class="card-text">
                </p>
                <div class="table-responsive">
                <table class="table table-condensed table-hover table-striped tabel" width="100%">
                  <thead>
                    <th>#</th>
                    <th>Nama Dosen</th>
                    <th>NIDN</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Judul</th>
                    <th>KP/Skripsi</th>
                    <th width="30%">Opsi</th>
                  </thead>
                  <tbody>
                    <?php

                      $sql = mysql_query("SELECT DISTINCT judul FROM tb_bimbingan");
                      $no = 1;
                      while($pp = mysql_fetch_array($sql))
                      {
                        $judul = $pp['judul'];
                        $s = mysql_query("SELECT * FROM tb_bimbingan WHERE judul= '$judul'");
                        $data = mysql_fetch_array($s);
                        $nidn = $data['nidn_id'];
                        $nim  = $data['nim_id'];

                        $sql1 = mysql_query( "SELECT * FROM tb_dosen WHERE nidn = $nidn");
                        $dosen= mysql_fetch_array($sql1);

                        $sql2 = mysql_query("SELECT * FROM tb_mahasiswa WHERE nim_id = $nim");
                        $mahasiswa= mysql_fetch_array($sql2);
                    ?>
                    <tr>
                      <td><?= $no;?></td>
                      <td><?=$dosen['nama'];?></td>
                      <td><?=$nidn;?></td>
                      <td><?=$mahasiswa['nama_mahasiswa'];?></td>
                      <td><?= $nim;?></td>
                      <td><?=$judul;?></td>
                      <td><?= $data['jenis_bimbingan'];?></td>
                    <th>
                      <a href="" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="controller/pembimbing-delete.php?id=<?=$data['judul'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                    </th>
                  </tr>

                    <?php

                    $no++;
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div><!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
            <div class="card card-warning card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Tambah Mahasiswa Bimbingan Baru:</span> <a href="?page=pembimbing baru" class="btn btn-warning"><i class="fa fa-users" style="color: white;"></i><span style="color: white;">+ Tambah</span></a> 
                  </div>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-12">
            <div class="card card-warning card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Summary Bimbingan:</span>
                     <table class="table table-hover">
                      <thead>
                        <th>KP</th>

                        <th>Skripsi</th>
                      </thead>
                      <tbody>
                        <td style="text-align: center;" data-toggle="tooltip" data-placement="top" title="Jumlah bimbingan KP Aktif">
                          <?php

                        $sql = mysql_query("SELECT COUNT(DISTINCT jenis_bimbingan) AS hitung FROM tb_bimbingan WHERE jenis_bimbingan= 'Kuliah Praktek' AND keterangan ='proses'");
                        $data= mysql_fetch_array($sql);

                        echo $data['hitung'];

                        ?>
                        </td>
                        <td style="text-align: center;"  data-toggle="tooltip" data-placement="top" title="Jumlah bimbingan skripsi Aktif">
                          <?php

                        $sql = mysql_query("SELECT COUNT(DISTINCT jenis_bimbingan) AS hitung FROM tb_bimbingan WHERE jenis_bimbingan= 'Skripsi'");
                        $data= mysql_fetch_array($sql);

                        echo $data['hitung'];

                        ?>
                        </td>
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>
        </div>
        </div>