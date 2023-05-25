<?php
session_start();
$id= $_SESSION['teamID'];
echo $id;
 $myConnection = mysqli_connect("localhost", "root", "", "firstday");

$read_query = "SELECT * FROM register where id=".$id;

$data = mysqli_query($myConnection, $read_query);

if(mysqli_num_rows($data)>0){

$row = mysqli_fetch_array($data);

echo $row['email'];

// echo '<h3 class="profile-username text-center">'.$row['fname'].'</h3>';
        
} else {
    echo "Record Not found";
}