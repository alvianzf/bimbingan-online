  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Halo <?= $_SESSION['nama_lengkap'];?></h5>
      <p>
      <a href="controller/logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
                Logout
            </a>
        </p>
        <a href="?page=ganti password" class="nav-link">
              <i class="nav-icon fa fa-key"></i>
                Ganti Password
            </a>
        </p>
    </div>
  </aside>
  <!-- /.control-sidebar -->