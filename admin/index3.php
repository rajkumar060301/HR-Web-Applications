<?php 
session_start();
$id = $_SESSION['adminID'];
include "config/config.php";

$fetch_query = "SELECT * FROM register where id=".$id;

$data_register = mysqli_query($myConnection, $fetch_query);

if(mysqli_num_rows($data_register)>0){

$row_data = mysqli_fetch_array($data_register);

// echo '<h3 class="profile-username text-center">'.$row_data['fname'].'</h3>';
        
} else {
    echo "Record Not found";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Font Awesome -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <style>
    table,td,th{
      border : 2px solid black;
      

    }
    th, td {
      padding: 5px;
      width : 600px;
}
    table {
    border-collapse: collapse;
    margin-left: 10%;

}


  </style>
</head>


<body class="hold-transition sidebar-mini">

<div class="wrapper">
  <!-- Navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Raj Kumar</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-open">
            <a href="index3.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
   
          </li>
          


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Teams
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='addteammate.php' class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teammate</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="listteammate.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Teammate</p>
                </a>
              </li>

             
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>

            <div id="teammate">


            </div>

          

          </div><!-- /.col -->
          



</div>

                    
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->

    <!-- Main content -->
   

  <!-- Main Footer -->


</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version </b> 3.2.0
    </div>
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Raj Kumar</a>.</strong> Webstep Solutions.
  </footer>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
