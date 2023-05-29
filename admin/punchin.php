<?php
session_start();

$iD=$_SESSION['teamID'];
$id=$_GET['id'];
include "config/config.php";
// echo $id;
// echo $iD;
// before fetch date and id of team member from todowork table
$currentDate = date("Y/m/d");
$read_todowork = " SELECT * FROM todowork where `userid`='$iD' AND `date`='$currentDate'";

$data_todo = mysqli_query($myConnection, $read_todowork);

if(mysqli_num_rows($data_todo)>0){


$row_data = mysqli_fetch_array($data_todo);

// echo "<script>alert('Already punch in today')</script>";
echo "<script>location.href='memberprofile.php'</script>";


} else {


  $read_query = "SELECT * FROM add_teammates where id=" . $iD;

  $data = mysqli_query($myConnection, $read_query);

  if (mysqli_num_rows($data) > 0) {

    $row = mysqli_fetch_array($data);



  $fname = $row['fname'];
//date_default_timezone_set("Asia/Calcutta");
  $date = date("Y/m/d");
  $time = date('h:i:s');

  $inset_query = "INSERT INTO todowork(`userid`,`fname`,`date`,`punchin`) values('$iD','$fname','$date','$time')";

  if (mysqli_query($myConnection, $inset_query)) {
    echo "<script>alert('Punch in successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  } else {
    echo "<script>alert('Not punch in')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  }
}
}





?>
