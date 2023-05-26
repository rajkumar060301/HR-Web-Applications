<?php
session_start();
 $iD=$_SESSION['teamID'];

 $myConnection = mysqli_connect("localhost", "root", "", "firstday");

$read_query = "SELECT * FROM add_teammates where id=".$iD;

$data = mysqli_query($myConnection, $read_query);

if(mysqli_num_rows($data)>0){

$row = mysqli_fetch_array($data);

        
} else {
    echo "Record Not found";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body >
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./memberprofile.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>


      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <?php 
            echo "<img class='profile-user-img img-fluid img-circle' src=".$row['image'].' width=128px height="128px">'; 
            // echo $row['image'];
            ?>
                </div>

<?php
echo '<h3 class="profile-username text-center">'.$row['fname'].'</h3>';
echo '<p class="text-muted text-center">'.$row['emptype'].'</p>';

?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i>  Permanent address</strong>

                <p class="text-muted">

                  <?php echo
                  $row['paddress']; ?>
                </p>

                <hr>

                <strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Phone Number</strong>

                <p class="text-muted"><?php echo $row['pnumber']; ?></p>

                <hr>

                <strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
</svg>  Personal Email</strong>

                <p class="text-muted"><?php echo $row['pemail']; ?></p>

                <hr>

                <strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
</svg>  Official Email</strong>

                <p class="text-muted"><?php echo $row['oemail']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">uploaded</a></li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <?php 
                        // echo '<img class='img-circle img-bordered-sm' src=".$row['image'].' alt="user image">';
                        echo "<img class='img-circle img-bordered-sm' src=".$row['image'].'>'; 

                        ?>
                        <span class="username">
                          <a href="#"><?php echo $row['fname'];?></a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
    
                        <?php 

                                echo "<th>".'Infomation of profile'."</th>";

                        ?>
                     


  <div class="container py-5">
  
      <div class="col-lg-12">
      <div class="row">
      <div class="card col-md-6">
          <div class="card-body">
            <div class="row">
              <dxiv class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </dxiv>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['fname']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">DOB</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['dob']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date Of joining</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['dateofjoining'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Employee name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['emptype']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Personal Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['pemail']; ?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Official Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['oemail']; ?></p>
              </div>
            </div>
            <hr>




          </div>
        </div>
      <div class="card col-md-6">
          <div class="card-body">
          

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Adhar</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['adhar']; ?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Academics</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['academics']; ?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Permanat address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['paddress']; ?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Current Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['caddress']; ?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alternet Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['anumber']; ?></p>
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['password']; ?></p>
              </div>
            </div>


          </div>
        </div>
      </div>
        
    
    </div>
  </div>

</p>


                    </div>


                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>

    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">

        <!-- To do from start input  -->
        <!-- <form action="todowork.php" method="post"> -->


          <div class="card-body py-4 px-4 px-md-5">
          <h3>Hi, <?php echo $row['fname']; ?></h3>

            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
              <i class="fas fa-check-square me-1"></i>
              <u>My Todo-Task</u>
            </p>

            <div class="pb-2">
              <div class="card">
                <div class="card-body">
                <a href="punchin.php"><button type="button" class="btn btn-primary"  id="punchin" name="punchin" onclick="myFunction()" >Punch In</button></a>


                    <button type="button" id="punchouting" class="btn btn-primary" onclick="punchOut()">Punch Out</button>
                    <script>
                function punchOut() {

                  var today = new Date();
                  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                  
                  var today = new Date();
                  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                  const btn = document.getElementById('punchouting');

                  btn.style.backgroundColor = 'green';

                  document.getElementById("punchout").innerHTML = date+" time "+time;
                  var checkbox = document.getElementById("punchout1");
                  checkbox.value = time;

                    }

                </script>
                    <a href="lunchin.php"><button type="button" class="btn btn-primary" onclick="lunchinTime();">Lunch In</button></a>

                    <!-- <script>
                function lunchinTime() {

                  var today = new Date();
                  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                  // document.getElementById("lunchin").innerHTML = "Lunch break time "+ time;
                  if (localStorage.getItem("submittedDate") !== getCurrentDate()) {
                    // Save the current date in local storage
                    localStorage.setItem("submittedDate", getCurrentDate());

                    // Perform the form submission or any desired action
                    // Example: document.getElementById("myForm").submit();
                    // console.log(alert('lunch time set'));
                    document.location.href ='lunchin.php';

                  } else {
                    // Display a message or take alternative action
                    console.log(alert('lunch time already submitted today!'));
                    

                    }

                    }

                    function getCurrentDate() {
                        var today = new Date();
                        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                        return date;
                      }
                </script> -->
                    <button type="button" class="btn btn-primary" onclick="lunchOut();">Lunch Out</button>

                    <script>
                function lunchOut() {

                  var today = new Date();
                  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                  // document.getElementById("lunchout").innerHTML = "Lunch Out time "+time;
                  if (localStorage.getItem("submittedDate") !== getCurrentDate()) {
                    // Save the current date in local storage
                    localStorage.setItem("submittedDate", getCurrentDate());

                    // Perform the form submission or any desired action
                    // Example: document.getElementById("myForm").submit();
                    // console.log(alert('lunch out time set'));
                    document.location.href ='lunchout.php';

                  } else {
                    // Display a message or take alternative action
                    console.log(alert('lunch out already submitted today!'));

                    }                  
                    }
                    function getCurrentDate() {
                        var today = new Date();
                        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                        return date;
                      }                    
                </script>



                </div>
              </div>
            </div>

            <hr class="my-4">
            <form action="todowork.php" method="post">

            <ul class="list-group list-group-horizontal rounded-0">
              <li
                class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input  class="form-check-input me-0" type="checkbox" name="punchout" id="punchout1"
                    aria-label="..." />
                </div>
              </li>
              <li
                class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0" id='punchout'>Punch out time</p>
              </li>

            </ul>


            <div class="d-flex flex-row align-items-center">
                    
                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                      name="task" placeholder="Add new task ">
                    <a href="#!" data-mdb-toggle="tooltip" title="Set due date">
                    </a>



                  </div>

                  <!-- <input type="text" placeholder="choose time in hours and minutes"> -->
      <div class="input-group date"  style="margin-top:5px">
        <input type="text" class="form-control" name="upwork" id="date" placeholder="Upwork time" onfocus="(this.type='time')" required>
        <span class="input-group-append">
          <span class="input-group-text bg-light d-block">
            <!-- <i class="fa fa-calendar" id="date"></i> -->
          </span>
        </span>
      </div>
      <div class="input-group date"  style="margin-top:5px">
        <input type="text" class="form-control" name="webtracker" id="date" placeholder="Web tracking time" onfocus="(this.type='time')" required>
        <span class="input-group-append">
          <span class="input-group-text bg-light d-block">
            <!-- <i class="fa fa-calendar" id="date"></i> -->
          </span>
        </span>
      </div>

            <button type="submit" name='submit' onclick="submitForm(); return false;"> SUBMIT</button>

            </form>
            <script>
    function submitForm() {
      // Check if form has been submitted today
      if (localStorage.getItem("submittedDate") !== getCurrentDate()) {
        // Save the current date in local storage
        localStorage.setItem("submittedDate", getCurrentDate());

        // Perform the form submission or any desired action
        // Example: document.getElementById("myForm").submit();
        console.log(alert('submitted'));
        document.location.href ='todowork.php';

      } else {
        // Display a message or take alternative action
        console.log(alert('Form already submitted today!'));

      }
    }

    function getCurrentDate() {
      var today = new Date();
      var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      return date;
    }
  </script>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version </b> 3.2.0
    </div>
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Raj Kumar</a>.</strong> Webstep Solutions.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<style>
  nav.main-header.navbar.navbar-expand.navbar-white.navbar-light
{
  width: 100%;
    margin: 0px !important;
}
    .content-wrapper {
    width: 100%;
    margin: 0px !important;
}

</style>
</body>
</html>
