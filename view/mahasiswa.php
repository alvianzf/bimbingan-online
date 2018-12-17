<?php

$err = @$_GET['error'];
$del = @$_GET['delete'];

if ($err == 'false')
{
  echo '<script>swal("Berhasil", "menambahkan mahasiswa", "success");</script>';
}else if($err =='true')
{
  echo '<script>swal("Gagal", "menambahkan mahasiswa", "error");</script>';
}

if ($del == 'true')
{
  echo '<script>swal("Berhasil", "menghapus mahasiswa", "success");</script>';
}

?>  
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Daftar Mahasiswa</h5>

                <p class="card-text">
                Daftar Mahasiswa Aktif:
                </p>
                <div class="table-responsive">
                <table class="table table-condensed table-hover table-striped tabel" width="100%">
                  <thead>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Alamat</th>
                    <th>Nomor Kontak</th>
                    <th width="15%">Opsi</th>
                  </thead>
                  <tbody>
                    <?php
                      $no =1;
                      $sql = mysql_query("SELECT * FROM tb_mahasiswa");
                      while ($data = mysql_fetch_array($sql))
                      {
                        ?>
                        <tr>
                          <td><?=$no;?></td>
                          <td><img src="img/<?=$data['nama_mahasiswa'];?>.JPG" width="100%"></td>
                          <td><?=$data['nama_mahasiswa'];?></td>
                          <td><?= $data['nim_id'];?></td>
                          <td><?=$data['program_studi'];?></td>
                          <td><?=$data['alamat'];?></td>
                          <td><?=$data['nomor_hp']?></td>
                          <td>
                      <a href="?page=edit mahasiswa&id=<?=$data['Id'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="controller/mahasiswa-delete.php?id=<?= $data['Id'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                        </td>
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
            <div class="card card-primary card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Tambah Mahasiswa Baru:</span> <a href="?page=tambah mahasiswa" class="btn btn-success"><i class="fa fa-users"></i>+ Tambah</a> 
                  </div>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Summary Mahasiswa:</span>
                    <table class="table table-hover table=striped table-condensed">
                      <thead>
                        <th>Teknik Informatika</th>
                        <th>Sistem Informasi</th>
                        <th>Komputer Akuntansi</th>
                      </thead>
                      <tbody>
                        <td style="text-align: center" data-toggle="tooltip" data-placement="top" title="Jumlah Mahasiswa Teknik Informatika">
                          <?php
                            $hit = mysql_query("SELECT COUNT(*) AS hitung FROM tb_mahasiswa WHERE program_studi = 'Teknik Informatika'");
                            $hitung = mysql_fetch_array($hit);

                            echo $hitung['hitung'];
                          ?>
                        </td>

                        <td style="text-align: center" data-toggle="tooltip" data-placement="top" title="Jumlah Mahasiswa Sistem Informasi">
                          <?php
                            $hit = mysql_query("SELECT COUNT(*) AS hitung FROM tb_mahasiswa WHERE program_studi = 'Sistem Informasi'");
                            $hitung = mysql_fetch_array($hit);

                            echo $hitung['hitung'];
                          ?>
                        </td>
                        <td style="text-align: center" data-toggle="tooltip" data-placement="top" title="Jumlah Mahasiswa Komputer Akuntansi">
                          <?php
                            $hit = mysql_query("SELECT COUNT(*) AS hitung FROM tb_mahasiswa WHERE program_studi = 'Komputer Akuntansi'");
                            $hitung = mysql_fetch_array($hit);

                            echo $hitung['hitung'];
                          ?>
                        </td>
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>
        </div>
        </div>