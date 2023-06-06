<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/rajkumar/admin/teammemberlogin.php"); //to redirect back to "index.php" after logging out
exit();
?>