<?php
session_start();
$name = $_POST['email'];
$password = $_POST['password'];
include "config/config.php";

$read_query = "SELECT * from add_teammates where pemail='".$name."' and password='".$password."'";
   $result = $myConnection->query($read_query);
   if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $_SESSION['teamID']=$row['id'];

               header("location:./teammemberprofile.php");

            }
            else{

                echo "<script>alert('You entered Wrong email id or Password')</script>";
                echo "<script>location.href='teammemberlogin.php'</script>";

            }

?>
