<?php 
$err = @$_GET['error'];

if ($err == 'false')
{
  echo '<script>swal("Berhasil", "menambahkan bimbingan", "success");</script>';
}else
{
  echo '<script>swal("Gagal", "menambahkan bimbingan", "error");</script>';
}


?>


          <div class="col-lg-10">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Sejarah Bimbingan Pribadi</h5>

                <p class="card-text">
                Daftar Bimbingan:
                </p>
                <div class="table-responsive B">
                <table class="table table-hover table-striped tabel" width="100%">
                  <thead>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Bimbingan Terakhir</th>
                    <th>Bimbingan ke</th>
                    <th>Jenis Bimbingan</th>
                    <th>Pembimbing</th>
                    <th>Opsi</th>
                  </thead>
                  <tbody>
                    <?php
                    $nmor = $_SESSION['nmor'];
                    $no =1;
                    $j = mysql_query("SELECT * FROM tb_bimbingan WHERE nim_id = $nmor ORDER BY Id DESC");
                    while ($data = mysql_fetch_assoc($j))
                    {

                      $nidn = $data['nidn_id'];

                      $g = mysql_query("SELECT * FROM tb_dosen WHERE nidn = $nidn");
                      $do= mysql_fetch_assoc($g);

                    ?>
                    <tr>
                      <td><?=$no;?></td>
                      <td><?=$data['judul'];?></td>
                      <td><?=$data['tanggal'];?></td>
                      <td><?=$data['status'];?></td>
                      <td><?=$data['jenis_bimbingan'];?></td>
                      <td><?=$do['nama'];?></td>
                      <td>
                      <a href="?page=lihat revisi&id=<?=$data['Id'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Data"><i class="fa fa-eye"></i></a>
                      <a href="controller/riwayat-delete.php?id=<?=$data['Id'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                    </td>


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