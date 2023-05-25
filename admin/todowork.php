<?php
session_start();
$connection = mysqli_connect('localhost','root','','firstday');
if(!$connection){
     echo "<script>alert('Database not connected')</script>";
    //  echo "<script>location.href='addteammate.php'</script>";
} 
$iD =  $_SESSION['teamID'];
$punchout = $_POST['punchout'];
// echo $lunchin = $_POST['lunchin']."<br>";
// echo $lunchout = $_POST['lunchout']."<br>";
$task = $_POST['task'];
$upwork = $_POST['upwork'];
$webtracker = $_POST['webtracker'];

$update = "UPDATE todowork SET `punchout`='$punchout' ,`task`='$task',`upwork`='$upwork',`webtracker`='$webtracker' WHERE id=".$iD;

if(mysqli_query($connection,$update)){
    echo "<script>alert('Today task sumbmitted succussfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";
    // echo "Updation successfully";

}
else{
    // echo "<script>alert('Task not addred')</script>";
    // echo "<script>location.href='memberprofile.php'</script>";
    // echo "data not Updated";

}

?>