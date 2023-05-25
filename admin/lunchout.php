<?php
session_start();
$connection = mysqli_connect('localhost','root','','firstday');
if(!$connection){
     echo "<script>alert('Database not connected')</script>";
} 
$iD =  $_SESSION['teamID'];
date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');

$update = "UPDATE todowork SET `lunchout`='$time'  WHERE id=".$iD;

if(mysqli_query($connection,$update)){
    echo "<script>alert('Punch out is successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

}
else{
    echo "<script>alert('Punch out is not successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

}
?>