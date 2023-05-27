<?php
session_start();
$username = $_POST['email'];
$password = $_POST['password'];
include "config/config.php";

$pwd = md5($password);

$read_query = "SELECT * from register where email='".$username."' and password='".$pwd."'";
$result = $myConnection->query($read_query);
   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['adminID']=$row['id'];
        header("location:./index3.php");
            }
            else{

                echo "<script>alert('You entered Wrong email id or Password')</script>";
                echo "<script>location.href='adminlogin.html'</script>";

            }