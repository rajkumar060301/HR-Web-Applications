<?php
session_start();
$iD=$_SESSION['teamID'];
include "config/config.php";

date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');
// before fetch date and id of team member from todowork table
$currentDate = date("Y/m/d");
$lunchout = '00:00:00';
$read_todowork = " SELECT * FROM todowork where `id`='$iD' AND `date`='$currentDate' AND `lunchout` = '$lunchout'  ";

$data_todo = mysqli_query($myConnection, $read_todowork);

if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);

  $update = "UPDATE todowork SET `lunchout`='$time'  WHERE `id`='$iD' AND `date`='$currentDate' ";

  if (mysqli_query($myConnection, $update)) {
    echo "<script>alert('Lunch out is successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  } else {
    echo "<script>alert('Lunch out is not successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";
  }

}
else {

  echo "<script>alert('Already lunch out today')</script>";
  echo "<script>location.href='memberprofile.php'</script>";

}
?>
