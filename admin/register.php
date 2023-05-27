<?php 
session_start();
include "config/config.php";

$message ='';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
  
 $sql = "SELECT * from register where email='$email'";
 $result = mysqli_query($myConnection,$sql);

    if (mysqli_num_rows($result) > 0) {
   
     $row = mysqli_fetch_assoc($result);
     if($email==isset($row['email'])){
            $message = "Email ID Already Exists !!";
            echo "<script>alert('Email ID Already Exists !!')</script>)";
            echo "<script>location.href='register.php'</script>";

     }
     else{
        $_SESSION['uID']=$row['id'];

     }

    }
    

    $inset_query = "INSERT INTO register(`fname`,`email`,`password`,`terms`) values('".$_POST['fname']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['terms']."')";
    
    if(mysqli_query($myConnection,$inset_query)){

        echo "<script>location.href='./index3.php'</script>";


        }

     else {
        echo "<script>alert('Data is not inserted in database')</script>";

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Registration</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new team member</p>
      <p style="text-align:center; color : red"><?php echo $message ?>  </p>


      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fname" REQUIRED placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" REQUIRED placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" REQUIRED placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" REQUIRED value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name='submit'>Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  <?php unset($_SESSION['uID']) ?>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
