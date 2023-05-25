<?php
session_start();
$name = $_POST['email'];
$password = $_POST['password'];
$connection=mysqli_connect('localhost','root','','firstday');
if(!$connection){
    echo "<script>alert('Database not connected')</script>";
    echo "<script>location.href='login.html'</script>";

}

// $pwd = md5($password);
//$_SESSION['login_id']=$user_id;

$read_query = "SELECT * from add_teammates where pemail='".$name."' and password='".$password."'";
   $result = $connection->query($read_query);
   if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        // print_r($row);
        $_SESSION['teamID']=$row['id'];
        // echo $_SESSION['teamID'];
        // header("location:./faltu.php");

               header("location:./memberprofile.php");


            }
            else{

                echo "<script>alert('You entered Wrong email id or Password')</script>";
                echo "<script>location.href='teammemberlogin.php'</script>";



            }

  


        


?>
