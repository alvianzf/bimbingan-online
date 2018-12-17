<?php 

$err = @$_GET['error'];
if ($err == 'false')
{
  echo '<script>swal("Berhasil", "menambahkan dosen", "success");</script>';
}else
{
  echo '<script>swal("Gagal", "menambahkan dosen", "error");</script>';
}
?>
          <div class="col-lg-8">
            <div class="card card-success card-outline">
              <div class="card-body">
                <h5 class="card-title">Daftar Dosen</h5>

                <p class="card-text">
                Daftar Dosen Aktif:
                </p>
                <div class="table-responsive">
                <table class="table table-condensed table-hover table-striped tabel" width="100%">
                  <thead>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Program Studi</th>
                    <th>Nomor Kontak</th>
                    <th width="15%">Opsi</th>
                  </thead>
                  <tbody>
                    <?php

                      $sql = mysql_query("SELECT * FROM tb_dosen");
                      $no = 1;
                      while($data = mysql_fetch_array($sql))
                      {
                    ?>
                    <tr>
                    <th><?= $no;?></th>
                    <th><img src="img/<?=$data['nama'];?>.JPG" width="100%"></th>
                    <th><?=$data['nama'];?></th>
                    <th><?=$data['nidn'];?></th>
                    <th><?=$data['program_studi'];?></th>
                    <th><?=$data['nomor_hp'];?></th>
                    <th>
                      <a href="?page=edit dosen&id=<?= $data['Id'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="controller/dosen-delete.php?id=<?=$data['Id'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
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
            <div class="card card-success card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Tambah Dosen Baru:</span> <a href="?page=tambah dosen" class="btn btn-success"><i class="fa fa-users"></i>+ Tambah</a> 
                  </div>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-12">
            <div class="card card-success card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Summary Dosen:</span>
                    <table class="table table-hover table=striped table-condensed">
                      <thead>
                        <th>Teknik Informatika</th>
                        <th>Sistem Informasi</th>
                        <th>Komputer Akuntansi</th>
                      </thead>
                      <tbody>
                        <td style="text-align: center" data-toggle="tooltip" data-placement="top" title="Jumlah Dosen Teknik Informatika">
                          <?php
                            $hit = mysql_query("SELECT COUNT(*) AS hitung FROM tb_dosen WHERE program_studi = 'Teknik Informatika'");
                            $hitung = mysql_fetch_array($hit);

                            echo $hitung['hitung'];
                          ?>
                        </td>

                        <td style="text-align: center" data-toggle="tooltip" data-placement="top" title="Jumlah Dosen Sistem Informasi">
                          <?php
                            $hit = mysql_query("SELECT COUNT(*) AS hitung FROM tb_dosen WHERE program_studi = 'Sistem Informasi'");
                            $hitung = mysql_fetch_array($hit);

                            echo $hitung['hitung'];
                          ?>
                        </td>
                        <td style="text-align: center" data-toggle="tooltip" data-placement="top" title="Jumlah Dosen Komputer Akuntansi">
                          <?php
                            $hit = mysql_query("SELECT COUNT(*) AS hitung FROM tb_dosen WHERE program_studi = 'Komputer Akuntansi'");
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