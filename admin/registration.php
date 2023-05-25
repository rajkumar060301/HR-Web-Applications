<?php
session_start();
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$term = $_POST['terms'];

$pwd = md5($password);

$connection = mysqli_connect('localhost','root','','firstday');
if (!$connection){
    echo "database not connected";
}  
    $sql = "SELECT * from register where email='$email'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
        $_SESSION['uID']=$row['id'];


        echo "<script>location.href='register-v2.php'</script>";

    }
    else{
    $inset_query = "INSERT INTO register(`fname`,`email`,`password`,`terms`) values('$fname','$email','$pwd','$term')";

    if (mysqli_query($connection, $inset_query)) {
        echo "<script>alert('registration successfully')</script>)";
                echo "<script>location.href='index3.php'</script>";

    } else {
        echo "<script>alert('please fill the data correctly')</script>";

    }
}

?>