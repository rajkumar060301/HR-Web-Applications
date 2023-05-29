<?php
session_start();
$iD=$_SESSION['teamID'];
include "config/config.php";

// date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');
// before fetch date and id of team member from todowork table
$currentDate = date("Y/m/d");
$lunchin = '00:00:00';

$read_todowork = " SELECT * FROM todowork where `userid`='$iD' AND `date`='$currentDate' AND `lunchin`='$lunchin'";

$data_todo = mysqli_query($myConnection, $read_todowork);

if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);

  echo "<script>alert('you are not lunch in today')</script>";
  echo "<script>location.href='memberprofile.php'</script>";
}

else {
  $lunchout = '00:00:00';

  $read = " SELECT * FROM todowork where `userid`='$iD' AND `date`='$currentDate' AND `lunchout`='$lunchout'";

  $data = mysqli_query($myConnection, $read);

if(mysqli_num_rows($data)>0){
  $row = mysqli_fetch_array($data);
  $update = "UPDATE todowork SET `lunchout`='$time'  WHERE `userid`='$iD' AND `date`='$currentDate'";

  if (mysqli_query($myConnection, $update)) {
    echo "<script>alert('Lunch out is successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  } else {
    echo "<script>alert('you are already logout today')</script>";
    echo "<script>location.href='memberprofile.php'</script>";
  }

}

else {


  // echo "<script>alert('you are already logout today')</script>";
  echo "<script>location.href='memberprofile.php'</script>";

}

}
?>
