
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?page=home" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Bimbingan Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/<?=$_SESSION['nama_lengkap']?>.JPG" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['nama_lengkap']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="?page=home" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <?php
          if($_SESSION['log'] == 1)
          {
            ?>
  
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-group"></i>
              <p>
                Administrasi
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=dosen" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=mahasiswa" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Mahasiswa</p>
                </a>
              </li> <li class="nav-item">
                <a href="?page=pembimbing" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Pembimbing</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="?page=pengguna" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Daftar Pengguna
              </p>
            </a>
          </li>
            </ul>

            <?php
        }
            ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Bimbingan
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php

if($_SESSION['jabatan'] == 'mahasiswa')
{
  ?>
              <li class="nav-item">
                <a href="?page=bimbingan" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bimbingan Online</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=riwayat" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Riwayat Bimbingan</p>
                </a>
              </li>
<?php

}

if($_SESSION['jabatan'] == 'dosen')
{
  ?>
              <li class="nav-item">
                <a href="?page=daftar bimbingan" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Bimbingan</p>
                </a>
              </li>
            
          

          <?php

        }

        ?>
        </ul>
        </li>
          <li class="nav-item">
            <a href="?page=laporan bimbingan" class="nav-link">
              <i class="nav-icon fa fa-print"></i>
              <p>
                Cetak Laporan Bimbingan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="controller/logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>