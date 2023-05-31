<?php
session_start();
$iD = $_GET['id'];
include ('config/config.php');
echo $read_todowork = " SELECT concat(datediff(second,`punchin`,`punchout`)/3600, 'hours', (datediff(second,`punchin`,`punchout`)%3600)/60,
 'minutes', (datediff(second,`punchin`, `punchout`)%3600)%60, 'seconds') as total  FROM todowork where `userid`='$iD' ";

print_r($data_todo = mysqli_query($myConnection, $read_todowork));


if(mysqli_num_rows($data_todo)>0){
  $row_data = mysqli_fetch_array($data_todo);
  echo $row_data['total'];

//   echo $row_data['upwork_time']."<br>";
//   echo $row_data['webtracker_time'].'<br>';
// $total_time = $row_data['upwork_time'] + $row_data['webtracker_time'];
//   header(location: 'timescore.php?id=$totaltime');
//   echo "<script>location.href='report.php?total=$total_time'</script>";





}
else{

}


?>