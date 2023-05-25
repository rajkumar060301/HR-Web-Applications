<?php
session_start();
echo $id =  $_SESSION['teamID']."<br>";
echo $punchout = $_POST['punchout']."<br>";
echo $lunchin = $_POST['lunchin']."<br>";
echo $lunchout = $_POST['lunchout']."<br>";
echo $task = $_POST['task']."<br>";
echo $_POST['upwork']."<br>";
echo $_POST['webtracker'];


?>