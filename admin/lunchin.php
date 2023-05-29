<?php
session_start();
$iD=$_SESSION['teamID'];
include "config/config.php";
// date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');
// before fetch date and id of team member from todowork table
$currentDate = date("Y/m/d");
$lunchin = '00:00:00';
$read_todowork = " SELECT * FROM todowork where `userid`='$iD' AND `date`='$currentDate' AND `lunchin` = '$lunchin'";

$data_todo = mysqli_query($myConnection, $read_todowork);

if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);

  $update = "UPDATE todowork SET `lunchin`='$time'  WHERE `userid`='$iD' AND `date`='$currentDate' ";

  if (mysqli_query($myConnection, $update)) {
    echo "<script>alert('Lunchin is successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  } else {
    echo "<script>alert('Lunch in is not successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";
  }

} else {

  // echo "<script>alert('Already lunch in today')</script>";
  echo "<script>location.href='memberprofile.php'</script>";

}
?>
