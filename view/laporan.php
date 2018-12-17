
<?php

$id = $_SESSION['nmor'];
$jab = $_SESSION['jabatan'];

?>
  
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Laporan</h5>

                <p class="card-text">
                  Cetak Laporan Bimbingan KP dan Skripsi
                </p>
                <a href="functions/lap-Kp.php?id=<?=$id;?>&role=<?=$jabatan?>" class="card-link">Laporan Bimbingan KP</a>
                <a href="functions/lap-skripsi.php?id=<?=$id;?>&role=<?=$jabatan?>" class="card-link">Laporan Bimbingan Skripsi</a>
              </div>
            </div><!-- /.card -->
          </div>