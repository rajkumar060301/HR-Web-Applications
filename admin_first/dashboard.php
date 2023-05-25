
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: red;
      color: white;
      text-align: center;
    }
    </style>
</head>
<body>
  <header>
    <h1>Admin Website</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
  <?php

    $myConnection = mysqli_connect("localhost", "root", "", "firstday");

    $read_query = "SELECT `email`,`password` FROM register";

    $data = mysqli_query($myConnection, $read_query);

    if(mysqli_num_rows($data)>0){

        echo "<table style= border: 1ps solid black>
        <tr>
        <th>EMAIL</th>
        <th>password</th>";

        while($row = mysqli_fetch_array($data)){

            echo"<tr>";

            echo "<td>".$row['email']."</td>";

            echo "<td>".$row['password']."</td>";



            echo "</tr>";
        }
    } else {
        echo "Record Not found";
    }

    
    ?>

  </main>
  <footer class="footer">
    <p>&copy; 2023 Admin Website</p>
  </footer>
</body>
</html>

