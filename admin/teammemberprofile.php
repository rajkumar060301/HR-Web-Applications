<?php
session_start();
 $iD=$_SESSION['teamID'];

 include "config/config.php";

$time = date('h:i:s');
$punchin = '00:00:00';
$lunchin = '00:00:00';
$lunchout = '00:00:00';
$punchout = '00:00:00';

$currentDate = date("Y-m-d");

$read_todowork = " SELECT * FROM todowork where `userid`='$iD' AND `date`='$currentDate'";
$data_todo = mysqli_query($myConnection, $read_todowork);
if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);
}else{
  ?>
  <!-- <a href="lunchin.php"><button type="button" class="btn btn-primary" onclick="lunchinTime();">Lunch In</button></a> -->
  <?php
}
?>
<?php

$read_query = "SELECT * from add_teammates where `id` = '$iD' ";
$data = mysqli_query($myConnection, $read_query);

if(mysqli_num_rows($data)>0){
 
$row = mysqli_fetch_array($data);


} else {
    echo "Record Not found";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body >
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./memberprofile.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:void(0)" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="javascript:void(0)" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="javascript:void(0)" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="javascript:void(0)" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>


      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="javascript:void(0)" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>



 

    <!-- Main content -->
 

    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">

        <!-- To do from start input  -->
         <!-- <form action="todowork.php" method="post"> -->


          <div class="card-body py-4 px-4 px-md-5">
          <h3>Hi, <?php echo $row['fname']; ?></h3>

            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
              <i class="fas fa-check-square me-1"></i>
              <u>My Todo-Task</u>
            </p>

            <div class="pb-2">
              <div class="card">
                <div class="card-body">
                <?php 
                if(mysqli_num_rows($data_todo)>0){ 
                              if($row_data['punchin']== $punchin){ ?>
                                <a href="punchin.php?id='.$row['id'].'"><button type="button" class="btn btn-primary"  id="punchin" name="punchin" onclick="myFunction()" >Punch In</button></a>
                                <?php 
                              }else{
                                ?>
                                <a href="javascript:void(0)"><button type="button" class="btn btn-primary"  id="punchin" name="punchin" >Punch In</button></a>
                                <?php
                                } 
                                ?>

                              <?php


        
                            if($row_data['lunchin']!=$lunchin){
                              ?>
                            <button type="button" class="btn btn-primary" >Lunch Break</button>
                              <?php
                            }else{
                              ?>
                              <a href="lunchin.php"><button type="button" class="btn btn-primary" onclick="lunchinTime();">Lunch Break</button></a>
                              <?php
                            }

                if($row_data['lunchout']!=$lunchout)
                {
                  ?>
                    <button type="button" class="btn btn-primary" >Back from lunch</button>
                    <?php
                }
                else{
                  ?>
                      <a href="lunchout.php"><button type="button" class="btn btn-primary" >Back From Lunch</button></a>  

                                <script>

                                  function punchOut(){

                                    var getform = document.getElementById('showdiv').innerHTML += '<form action="todowork.php" method="post"><input  class="form-check-input me-0" type="checkbox" name="punchout" id="punchout1" aria-label="..." required/>'+"Select punchout time";
                                    var getform = document.getElementById('showdiv').innerHTML += '<div class="input-group date"  style="margin-top:5px"> <p class="btn btn-primary">Upwork time</p> <label for="hour">Hour:</label> <select name="upworkhour" id="hour" style="width: 100px;height :35px " required>'+
                                "<?php
                                for ($i = 1; $i <= 24; $i++) {
                                    echo "<option value='$i' required >$i</option>";
                                }
                                ?>"+
                                '</select> <label for="minute">Minute:</label> <select name="upworkminute" id="minute" style="width: 100px;height :35px " required>'+
                                "<?php
                                for ($i = 0; $i <= 59; $i++) {
                                    $formattedMinute = sprintf("%02d", $i); // Pad single digit minutes with leading zero
                                    echo "<option value='$i' required>$formattedMinute</option>";
                                }
                                ?>"
                                + '</select><input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" name="upwork_task" placeholder="Add task worked on upwork " style="width: 100px;height :35px; margin-left: 5%; " required></div>';
                                      var getform = document.getElementById('showdiv').innerHTML += '<div class="input-group date"  style="margin-top:5px"><p class="btn btn-primary">Webtracker time</p><label for="hour">Hour:</label><select name="webtrackerhour" id="hour" style="width: 100px;height :35px " required>'+
                                "<?php
                                for ($i = 1; $i <= 24; $i++) {
                                    echo "<option value='$i' required>$i</option>";
                                }
                                ?>"+
                                '</select><label for="minute">Minute:</label><select name="webtrackerminute" id="minute" style="width: 100px;height :35px " required>'+

                                "<?php
                                for ($i = 0; $i <= 59; $i++) {
                                    $formattedMinute = sprintf("%02d", $i); // Pad single digit minutes with leading zero
                                    echo "<option value='$i' required>$formattedMinute</option>";
                                }
                                ?>"+
                                '</select><input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" name="webtracker_task" placeholder="Add task worked on web tracker " style="width: 100px;height :35px;margin-left: 3%; " required></div>';

                                var submit = document.getElementById('showdiv').innerHTML += "<button type='submit' name='submit'>SUBMIT</button></form>";

                                  }

                                </script>
                               
                  <?php


                      }
                      if($row_data['punchout']!= $lunchout ){
                        ?>
                            <button type="button" class="btn btn-primary" >Punch Out</button>
                            <?php
                      }
                      else{
    
                        ?>
                        <button type="button" id="punchouting" class="btn btn-primary" onclick="punchOut(); this.onclick=null;">Punch Out</button>
    
                          
                          <?php
    
                      }
                  }else{


              ?>

              <a href="punchin.php?id='.$row['id'].'"><button type="button" class="btn btn-primary"  id="punchin" name="punchin" onclick="myFunction()" >Punch In</button></a>
              <a href="lunchin.php"><button type="button" class="btn btn-primary" onclick="lunchinTime();">Lunch Break</button></a>
              <a href="lunchout.php"><button type="button" class="btn btn-primary" >Back From Lunch</button></a>
              <button type="button" id="punchouting" class="btn btn-primary" onclick="punchOut()">Punch Out</button>
              <?php
            }
            ?>

                </div>
              </div>
            </div>


            <?php if(mysqli_num_rows($data_todo)>0){ ?>
            
          <form id='form' action="todowork.php" method="post" <?php if( $row_data['lunchout']!=$punchout && $row_data['upwork_task']=='' &&$row_data['punchin']!=$punchout) { echo "style='display:block'"; } else {  echo "style='display:none'";  } ?>>

              <ul class="list-group list-group-horizontal rounded-0">
                <li
                  class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                  <div class="form-check">
                    <input  class="form-check-input me-0" type="checkbox" name="punchout" id="punchout1"
                      aria-label="..." required/>
                  </div>
                </li>
                <li
                  class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                  <p class="lead fw-normal mb-0" id='punchout'>Punch out time</p>
                </li>

              </ul>

              <div class="input-group date"  style="margin-top:5px">
              <p class="btn btn-primary">Upwork time</p>
              <label for="hour">Hour:</label>
              <select name="upworkhour" id="hour" style="width: 100px;height :35px " required>
              <?php
              for ($i = 1; $i <= 24; $i++) {
                  echo "<option value='$i' required >$i</option>";
              }
              ?>
              </select>

              <label for="minute">Minute:</label>
              <select name="upworkminute" id="minute" style="width: 100px;height :35px " required>
              <?php
              for ($i = 0; $i <= 59; $i++) {
                  $formattedMinute = sprintf("%02d", $i); // Pad single digit minutes with leading zero
                  echo "<option value='$i' required>$formattedMinute</option>";
              }
              ?>
              </select>
              <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                        name="upwork_task" placeholder="Add task worked on upwork " style="width: 100px;height :35px; margin-left: 5%; " required>

              </div>
              <div class="input-group date"  style="margin-top:5px">
              <p class="btn btn-primary">Webtracker time</p>
              <label for="hour">Hour:</label>
              <select name="webtrackerhour" id="hour" style="width: 100px;height :35px " required>
              <?php
              for ($i = 1; $i <= 24; $i++) {
                  echo "<option value='$i' required>$i</option>";
              }
              ?>
              </select>

              <label for="minute">Minute:</label>
              <select name="webtrackerminute" id="minute" style="width: 100px;height :35px " required>

              <?php
              for ($i = 0; $i <= 59; $i++) {
                  $formattedMinute = sprintf("%02d", $i); // Pad single digit minutes with leading zero
                  echo "<option value='$i' required>$formattedMinute</option>";
              }
              ?>
              </select>
              <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                        name="webtracker_task" placeholder="Add task worked on web tracker " style="width: 100px;height :35px;margin-left: 3%; " required>

              </div>

              <button type='submit' name='submit'>SUBMIT</button>


              </form>
              <?php } ?>

              <form action="todowork.php" method="post">
              <div id="showdiv"> </div>


              </form>
 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<style>
  nav.main-header.navbar.navbar-expand.navbar-white.navbar-light
{
  width: 100%;
    margin: 0px !important;
}
    .content-wrapper {
    width: 100%;
    margin: 0px !important;
}

</style>
</body>
</html>
