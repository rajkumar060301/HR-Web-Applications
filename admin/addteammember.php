<?php
if(isset($_POST['register'])){
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

// $fileext = explode('.',$filename);
// $filecheck = strtolower(end($fileext));
    $destinationacademics='academicsfile/'.$academicsfile;
    move_uploaded_file($tempfile,$destinationacademics);


$paddress = $_POST['paddress'];
$currentaddress = $_POST['caddress'];
$phone = $_POST['phone'];
$emergencynumber = $_POST['emergencynumber'];

$files = $_FILES['file'];
$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){
    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
}

// $target_dir = "uploads";
// $target_file =$target_dir.

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

$connection = mysqli_connect('localhost','root','','firstday');
if(!$connection){
     echo "<script>alert('Database not connected')</script>";
    //  echo "<script>location.href='addteammate.php'</script>";
}


    // $inset_query = "INSERT INTO add_teammates(`fname`,`dob`,`dateofjoining`,`emptype`,`pemail`,`oemail`,`adhar`,`academics`,`paddress`,`caddress`,`pnumber`,`anumber`,`picture`,`password`) values('".$fname."','".$dob."','".$doj."','".$emptype."','".$personalemail."','".$officialemail."','".$adhar."','".$academics."','".$paddress."','".$currentaddress."','".$phone."','".$emergencynumber."','".$image."')";
    $inset_query = "INSERT INTO add_teammates(`fname`,`dob`,`dateofjoining`,`emptype`,`pemail`,`oemail`,`adhar`,`academics`,`paddress`,`caddress`,`pnumber`,`anumber`,`image`,`password`) values('".$fname."','$dob','$doj','$emptype','$personalemail','$officialemail','$adhar','$destinationacademics','$paddress','$currentaddress','$phone','$emergencynumber','$destinationfile','$password')";

    if(mysqli_query($connection,$inset_query)){
        // move_uploaded_file($_FILES['stud_image']['tmp_name'], "upload/".$_FILES['stud_image']['name']);
        echo "<script>alert('Team member added in database')</script>";
        echo "<script>location.href='listteammate.php'</script>";
        // echo "data inserted";

    }
    else{
        echo "<script>alert('Team member not added')</script>";
        echo "<script>location.href='addteammate.php'</script>";
        // echo "data not inserted properly";

    }
}
    
?>