<?php
session_start();
$myConnection = mysqli_connect('localhost','root','','firstday');
if(!$myConnection){
     echo "<script>alert('Database not connected')</script>";
}
$iD =  $_SESSION['teamID'];
$punchout = $_POST['punchout'];

$task = $_POST['task'];
$upwork = $_POST['upwork'];
$webtracker = $_POST['webtracker'];

date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');
// before fetch date and id of team member from todowork table
$currentDate = date("Y/m/d");
$punchout = '00:00:00';
$read_todowork = " SELECT * FROM todowork where `id`='$iD' AND `date`='$currentDate' AND `punchout`='$punchout' ";

$data_todo = mysqli_query($myConnection, $read_todowork);

if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);
  $update = "UPDATE todowork SET `punchout`='$time' ,`task`='$task',`upwork`='$upwork',`webtracker`='$webtracker' WHERE id=".$iD;

  if(mysqli_query($myConnection,$update)){
    echo "<script>alert('Today task sumbmitted succussfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  }
  else{
    echo "<script>alert('Task not addred')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

  }

} else {

  echo "<script>alert('Task already submitted today')</script>";
  echo "<script>location.href='memberprofile.php'</script>";

}





?>
