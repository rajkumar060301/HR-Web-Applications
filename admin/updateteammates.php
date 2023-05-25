<?php
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$doj = $_POST['doj'];
$emptype =$_POST['emptype'];
$personalemail=$_POST['personalemail'];
$officialemail = $_POST['officialemail'];
$adhar = $_POST['adhar'];
$academics = $_FILES['academics'];
$academicsfile = $academics['name'];
$academicsfileerror = $academics['error'];
$tempfile = $academics['tmp_name'];
$iD=$_GET['id'];

// $filecheck = strtolower(end($fileext));
    $destinationacademics='academicsfile/'.$academicsfile;
    move_uploaded_file($tempfile,$destinationacademics);


$paddress = $_POST['paddress'];
$currentaddress = $_POST['caddress'];
$phone = $_POST['phone'];
$emergencynumber = $_POST['emergencynumber'];

$connection = mysqli_connect('localhost','root','','firstday');
if(!$connection){
     echo "<script>alert('Database not connected')</script>";
    //  echo "<script>location.href='addteammate.php'</script>";
} 

$sql = "SELECT image FROM add_teammates WHERE id = $iD";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $previousImage = $row['image'];
}

// Check if the image field is empty
if (empty($_FILES['file']['name'])) {
    $image = $previousImage; // Use the previous image if no new image is provided
} else {
    // Upload the new image and get its path
    $targetDir = "upload/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    $image = $targetFile;
}   




function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}
$password= randomPassword();




    $update = "UPDATE add_teammates SET `fname`='$fname' ,`dob`='$dob',`dateofjoining`='$doj',`emptype`='$emptype',`pemail`='$personalemail',`oemail`='$officialemail',`adhar`='$adhar',`academics`='$destinationacademics',`paddress`='$paddress',`caddress`='$currentaddress',`pnumber`='$phone',`anumber`='$emergencynumber',`image`='$image',`password`='$password' WHERE id=".$iD;

    if(mysqli_query($connection,$update)){
        echo "<script>alert('Updation is successfully')</script>";
        echo "<script>location.href='listteammate.php'</script>";
        // echo "Updation successfully";

    }
    else{
        echo "<script>alert('Team member not added')</script>";
        echo "<script>location.href='editteammates.php'</script>";
        // echo "data not Updated";

    }
}
    
?>