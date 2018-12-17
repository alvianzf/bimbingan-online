<?php

error_reporting(0);

// header('location:../bimbingan-online/index.php?page=home');
session_start();

if(!@$_SESSION['log'])
{
  header('location:login/');
}

include 'models/config.php';
include 'functions/sql.php';
include 'templates/head.php';
include 'templates/nav.php';
include 'templates/sidebar.php';
include 'controller/name_controller.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
            <?php if($_GET['page'] != '')
              {
                echo @$_GET['page'];
              }else
              {
                echo 'home';
              } ?>
                
              </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
              <li class="breadcrumb-item active">
                <?php 
                if(@$_GET['page'] != null)
              {
                echo @$_GET['page'];
              }else
              {
                echo 'home';
              } ?>
                
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php

          include 'controller/view.php';

          ?>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include 'templates/control-sidebar.php';
include 'templates/foot.php';
?>
