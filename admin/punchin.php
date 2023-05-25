<?php
session_start();


$myConnection = mysqli_connect("localhost", "root", "", "firstday");
if(!$myConnection){
    echo "<script>alert('Database not connected')</script>";

}

$iD=$_SESSION['teamID'];

$read_query = "SELECT * FROM add_teammates where id=".$iD;

$data = mysqli_query($myConnection, $read_query);

if(mysqli_num_rows($data)>0){

$row = mysqli_fetch_array($data);

// echo '<h3 class="profile-username text-center">'.$row['fname'].'</h3>';
       
} else {
   echo "Record Not found";
}
$fname = $row['fname'];
date_default_timezone_set("Asia/Calcutta");
$date = date("Y/m/d");
$time = date('h:i:s');

$inset_query = "INSERT INTO todowork(`id`,`fname`,`date`,`punchin`) values('$iD','$fname','$date','$time')";

if(mysqli_query($myConnection,$inset_query)){
    // move_uploaded_file($_FILES['stud_image']['tmp_name'], "upload/".$_FILES['stud_image']['name']);
    echo "<script>alert('Punch in successfully')</script>";
    echo "<script>location.href='memberprofile.php'</script>";
    // echo "data inserted";
  
}
else{
    echo "<script>alert('you already punch in today')</script>";
    echo "<script>location.href='memberprofile.php'</script>";
    // echo "data not inserted properly";

}
?>