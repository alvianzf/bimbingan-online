<?php

$nmor = $_SESSION['nmor'];


?>  
          <div class="col-lg-10">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Daftar Bimbingan Dosen</h5>

                <p class="card-text">
                Daftar Bimbingan:
                </p>
                <div class="table-responsive B">
                <table class="table table-hover table-striped tabel" width="100%">
                  <thead>
                    <th>#</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Jenis Bimbingan</th>
                    <th>Bimbingan Terakhir</th>
                    <th>Bimbingan Ke</th>
                    <th>Opsi</th>
                  </thead>
                  <tbody>
                    <tr>

                      <?php 
                      $no = 1;

                      $o = mysql_query("SELECT * FROM tb_bimbingan WHERE nidn_id = $nmor ORDER BY tanggal DESC");
                      while($data = mysql_fetch_assoc($o))
                      {
                        $id = $data['nim_id'];
                        $u = mysql_query("SELECT * FROM tb_mahasiswa WHERE nim_id = $id");
                        $nama = mysql_fetch_assoc($u);
                      ?>
                      <td><?=$no;?></td>
                      <td><?=$nama['nama_mahasiswa'];?></td>
                      <td><?=$id?></td>
                      <td><?=$data['jenis_bimbingan'];?></td>
                      <td><?=$data['tanggal'];?></td>
                      <td><?=$data['status'];?></td>

                      <td>
                      <a href="?page=revisi&id=<?=$data['Id'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Data"><i class="fa fa-eye"></i></a>
                      <a href="controller/bimbingan-delete.php?id=<?=$data['Id'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
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