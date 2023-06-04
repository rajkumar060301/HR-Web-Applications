<?php
session_start();
include "config/config.php";
$iD =  $_SESSION['teamID'];
$punchout = $_POST['punchout'];
$upworkhour=$_POST['upworkhour'];
$upworkminute=$_POST['upworkminute']; 
$upwork_task = $_POST['upwork_task'];

$webtrackerhour=$_POST['webtrackerhour'];
$webtrackerminute=$_POST['webtrackerminute'];
$webtracker_task = $_POST['webtracker_task'];

$upwork = $upworkhour.":".$upworkminute;
$webtracker = $webtrackerhour.":".$webtrackerminute;

// date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');

// before fetch date and id of team member from todowork table
$currentDate= date("Y/m/d");
$punchout = '00:00:00';
$read_todowork = " SELECT * FROM todowork where `userid`='$iD' AND `date`='$currentDate' AND `punchout`='$punchout' ";

$data_todo = mysqli_query($myConnection, $read_todowork);

if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);
  $update = "UPDATE todowork SET `punchout`='$time' ,`upwork_task`='$upwork_task', `webtracker_task`='$webtracker_task', `upwork`='$upwork',`webtracker`='$webtracker' WHERE `userid`='$iD' AND `date`='$currentDate'";

  if(mysqli_query($myConnection,$update)){
    echo "<script>alert('Today task sumbmitted succussfully')</script>";
    echo "<script>location.href='teammemberprofile.php'</script>";

  }
  else{
    echo "<script>alert('Task not addred')</script>";
    echo "<script>location.href='teammemberprofile.php'</script>";

  }

} else {

  echo "<script>location.href='teammemberprofile.php'</script>";

}





?>
