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

    <!-- Main content -->

    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
        
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
                              if($row_data['punchout']!= $lunchout ){
                                ?>
                                    <button type="button" class="btn btn-primary" >Punch Out</button>
                                    <?php
                              }
                              else{

                                ?>
                                  <button type="button" id="punchouting" class="btn btn-primary" onclick="punchOut();">Punch Out</button>
                                <script>
                                  function punchOut(){
                                    var getform = document.getElementById('showdiv').innerHTML += '<form action="todowork.php" method="post"><input  class="form-check-input me-0" type="checkbox" name="punchout" id="punchout1" aria-label="..." required/>'+"Select punchout time";
                                    var getform = document.getElementById('showdiv').innerHTML += '<input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" name="task" placeholder="Add new task " required>';
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
              + '</select></div>';
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
              '</select></div>';

              var submit = document.getElementById('showdiv').innerHTML += "<button type='submit' name='submit'>SUBMIT</button></form>";

                                  }

                                </script>
                                  
                                  <?php

                              }
                            
        
                            if($row_data['lunchin']!=$lunchin){
                              ?>
                            <button type="button" class="btn btn-primary" >Lunch In</button>
                              <?php
                            }else{
                              ?>
                              <a href="lunchin.php"><button type="button" class="btn btn-primary" onclick="lunchinTime();">Lunch In</button></a>
                              <?php
                            }

                if($row_data['lunchout']!=$lunchout)
                {
                  ?>
                    <button type="button" class="btn btn-primary" >Lunch Out</button>
                    <?php
                }
                else{
                  ?>
                      <a href="lunchout.php"><button type="button" class="btn btn-primary" >Lunch Out</button></a>
            <?php

                }
            }else{
              ?>

              <a href="punchin.php?id='.$row['id'].'"><button type="button" class="btn btn-primary"  id="punchin" name="punchin" onclick="myFunction()" >Punch In</button></a>
              <a href="lunchin.php"><button type="button" class="btn btn-primary" onclick="lunchinTime();">Lunch In</button></a>
              <a href="lunchout.php"><button type="button" class="btn btn-primary" >Lunch Out</button></a>
              <button type="button" id="punchouting" class="btn btn-primary" onclick="punchOut()">Punch Out</button>
              <?php
            }
            ?>

                </div>
              </div>
            </div>


            <?php if(mysqli_num_rows($data_todo)>0){ ?>
            
          <form id='form' action="todowork.php" method="post" <?php if( $row_data['lunchout']!=$punchout && $row_data['task']=='' &&$row_data['punchin']!=$punchout) { echo "style='display:block'"; } else {  echo "style='display:none'";  } ?>>

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
              <div class="d-flex flex-row align-items-center">

                      <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                        name="task" placeholder="Add new task " required>
                      <a href="#!" data-mdb-toggle="tooltip" title="Set due date">
                      </a>

                    </div>

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
