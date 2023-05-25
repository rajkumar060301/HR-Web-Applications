<?php
$iD=$_GET['id'];
$connection = mysqli_connect('localhost','root','','firstday');
if(!$connection){
     echo "<script>alert('Database not connected')</script>";
    //  echo "<script>location.href='addteammate.php'</script>";
} 

$delete = "DELETE FROM add_teammates WHERE id=".$iD;

if(mysqli_query($connection,$delete)){
    echo "<script>alert('Deleted row successfully')</script>";
    echo "<script>location.href='listteammate.php'</script>";
    // echo "Updation successfully";

}
else{
    echo "<script>alert('Team member not Deleted')</script>";
    echo "<script>location.href='listteammate.php'</script>";
    // echo "data not Updated";

}
?>