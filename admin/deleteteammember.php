<?php
$iD=$_GET['id'];
include "config/config.php";

$delete = "DELETE FROM add_teammates WHERE id=".$iD;

if(mysqli_query($myConnection,$delete)){
    echo "<script>alert('Deleted row successfully')</script>";
    echo "<script>location.href='listteammate.php'</script>";

}
else{
    echo "<script>alert('Team member not Deleted')</script>";
    echo "<script>location.href='listteammate.php'</script>";


}
?>