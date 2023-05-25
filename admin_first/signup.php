<?php
$name = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$connection = mysqli_connect('localhost','root','','firstday');
if (!$connection){
    echo "database not connected";
}
else{
if (isset($_POST['sub'])) {

    $inset_query = "INSERT INTO company(`name`,`username`,`email`,`phone`,`password`) values('$name','$username','$email','$phone','$password')";

    if (mysqli_query($connection, $inset_query)) {
        // echo "Data inserted Successfully";
        echo "<script>alert('registration successfully')</script>)";
        echo "<script>location.href='index.html'</script>";
    } else {
        echo "<script>alert('please fill the data correctly')</script>)";

    }


}
}
?>