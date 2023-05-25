<?php

$username = $_POST['username'];
$password = $_POST['password'];


$connection=mysqli_connect('localhost','root','','firstday');
if (!$connection){
    echo "<script>alert('database not connected')</script>";
}
if (isset($_POST['login'])) {


        $read_query = "SELECT * from company";
        $data = mysqli_query($connection, $read_query);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_array($data)) {
                if ($row['email'] == $username || $row['phone'] && $row['password'] == $password) {
   

                    //echo "<script>location.href='patient.html'</script>";
                    echo "<script>alert('login successfully')</script>)";
                    echo "<script>location.href='dashboard.html'</script>";
                } else {
                    //echo "Wrong data match";
                    //header("location:signin.html");
                    echo "<script>alert('You entered Wrong user id or Password')</script>)";
                    echo "<script>location.href='index.html'</script>";


                }
            }

        }
}
?>