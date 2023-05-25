<!DOCTYPE>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/arrangeTables.css">

</head>

<body>

    <form method="post">
        <h3>Add your worktime to database</h3><br>
            <input type="date" name="date"><br><br>
            <select name="day">
                <option value="Mandag">Mandag</option>
                <option value="Tirsdag">Tirsdag</option>
                <option value="Onsdag">Onsdag</option>
                <option value="Torsdag">Torsdag</option>
                <option value="Fredag">Fredag</option>
                <option value="Lørdag">Lørdag</option>
                <option value="Søndag">Søndag</option>
            </select>
            <input type="time" name="fromtime">
            <input type="time" name="totime">
            <input type="submit" value="submit"><br><br>

    </form>


</body>

<?php
$username = "root";
$password = "root";
$hostname = "127.0.0.1:3306"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br><br>";

//select a database to work with
$selected = mysql_select_db("danskebank",$dbhandle) 
  or die("Could not select any database");

// Insert to database
$date = $_POST['date'];
$day = $_POST['day'];
$fromtime = $_POST['fromtime'];
$totime = $_POST['totime'];

$sql = "INSERT INTO addWorkTime(date, day, fromtime, totime) VALUES('$date', '$day', '$fromtime', 'totime')";

$result = mysql_query($sql);

//Return records from database
$result = mysql_query("SELECT date, day, fromtime, totime FROM addWorkTime");
?>



    <!-- Return from the database -->
    <h3>Return from database:</h3><br>

  <!-- headers -->
        <tr>
            <th class="column1">Date</th>
            <th class="column2">Day</th>
            <th class="column3">From</th>
            <th class="column4">To</th>
        </tr>

        <!-- Now a row for each new set of data, here you probably need to
        loop through some data set you retrieve from the database -->
        <?php while($row = mysql_fetch_array($result)): ?>
        <table>
          <tr>
            <td class="resultcolumn4"><?php echo $row{'p_id'};?></td>
            <td class="resultcolumn1"><?php echo $row{'date'};?><br></td>
            <td class="resultcolumn2"><?php echo $row{'day'};?></td>
            <td class="resultcolumn3"><?php echo $row{'fromtime'};?></td>
            <td class="resultcolumn4"><?php echo $row{'totime'};?></td>
            <td>< href='link_to_the_add_or_edit?id='.<?php $row['id'] ?> </a></td>

            <?php

            $id=$_GET['id'];

            echo '<input type="hidden" name="name_of_hidden_input" value='.$id.'>';
            //and the rest of the form

                if($_GET['submit']){

                    //Some mysql injection prevention first
                    update danskebank SET date=['?'] where id= $_GET['name_of_hidden_input'];
                }
            ?>
          </tr>
          <?php endwhile; ?>
    </table>
</html>