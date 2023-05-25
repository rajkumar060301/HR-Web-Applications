<?php
session_start();
$connection = mysqli_connect('localhost','root','','firstday');
if(!$connection){
     echo "<script>alert('Database not connected')</script>";
} 
$iD =  $_SESSION['teamID'];
$punchout = $_POST['punchout'];

$task = $_POST['task'];
$upwork = $_POST['upwork'];
$webtracker = $_POST['webtracker'];

$update = "UPDATE todowork SET `punchout`='$punchout' ,`task`='$task',`upwork`='$upwork',`webtracker`='$webtracker' WHERE id=".$iD;

if(mysqli_query($connection,$update)){
    echo "<script>alert('Today task sumbmitted succussfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

}
else{
    echo "<script>alert('Task not addred')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

}

?>