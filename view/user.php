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
  echo '<script>swal("Berhasil", "menghapus pengguna", "success");</script>';
}

?>   
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Daftar Pengguna</h5>

                <p class="card-text">
                User List:
                </p>
                <div class="table-responsive">

                <table class="table table-condensed table-hover table-striped tabel" width="100%">
                  <thead>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>username</th>
                    <th>jabatan</th>
                    <th>role</th>
                    <th>Opsi</th>
                  </thead>
                  <tbody>
                    <?php

                    $no =1;
                    $nama = '';
                    $role = '';

                    $sq = mysql_query("SELECT * FROM users");
                    while ($data= mysql_fetch_array($sq))
                    {

                      $id = $data['reg_id'];
                      $jab= $data['jabatan'];

                        $role = $data['role'];

                      if ($jab == 'dosen')
                      {
                        $s = mysql_query("SELECT * FROM tb_dosen WHERE Id = $id");
                        $l = mysql_fetch_array($s);
                        $nama = $l['nama'];
                      }else {

                        $s = mysql_query("SELECT * FROM tb_mahasiswa WHERE Id = $id");
                        $l = mysql_fetch_array($s);
                        $nama = $l['nama_mahasiswa'];                      }
                      ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$nama?></td>
                        <td><?=$data['username'];?></td>
                        <td><?=$jab?></td>
                        <td><?=$role;?></td>
                        <td>
                          
                      <a href="?page=ubah pengguna&id=<?=$data['Id'];?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="controller/user-remove.php?id=<?=$data['Id'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
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
                    <span>Tambah Pengguna Baru:</span> <a href="?page=tambah pengguna" class="btn btn-success"><i class="fa fa-users"></i>+ Tambah</a> 
                  </div>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                  <div class="card-title">
                    <span>Summary Pengguna:</span>
                    <table class="table table-hover table=striped table-condensed">
                      <thead>
                        <th>Dosen</th>
                        <th>Mahasiswa</th>
                      </thead>
                      <tbody>
                        <td data-toggle="tooltip" data-placement="top" title="Jumlah pengguna Dosen">
                        <?php 
                        $data1 = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS hitung FROM users WHERE jabatan = 'dosen'"));

                          echo $data1['hitung'];

                        ?>
                      </td>
                      <td data-toggle="tooltip" data-placement="top" title="Jumlah pengguna Mahasiswa">
                        <?php 
                        $data1 = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS hitung FROM users WHERE jabatan = 'mahasiswa'"));

                          echo $data1['hitung'];

                        ?>
                      </td>
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>
        </div>
        </div>