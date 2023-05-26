<?php
session_start();

$myConnection = mysqli_connect("localhost", "root", "", "firstday");
if(!$myConnection){
    echo "<script>alert('Database not connected')</script>";

}

$iD=$_SESSION['teamID'];
date_default_timezone_set("Asia/Calcutta");
$time = date('h:i:s');
$read_query = "SELECT * FROM todowork where id=".$iD;

$data = mysqli_query($myConnection, $read_query);

if(mysqli_num_rows($data)>0){

    $row = mysqli_fetch_array($data);

       
} else {
   echo "Record Not found";
}

$punchin = $row['punchin'];


// before fetch date and id of team member from todowork table
$currentDate = date("Y/m/d"); 
$lunchin = '00:00:00';
$update = "UPDATE todowork SET `lunchin`='$time'  WHERE `id`='$iD' AND `date`='$currentDate' AND `punchin` = '$punchin' AND `lunchin` ='$lunchin' ";

if(mysqli_query($myConnection,$update)){
    echo "<script>alert('Lunchin is successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

}
else{
    echo "<script>alert('Lunch in is not successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";

}
?>