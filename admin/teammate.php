<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <script>
  $( function() {
    $("#datepicker").datepicker();
  });
  $( function() {
    $("#datepicker1").datepicker();
  });
  </script>
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width:600px;margin-top: 25px;">
  <div class="register-logo">
    <a href="../../index2.html"><b>Team Member</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register Team member</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fname" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group date" id="datepicker">
        <input type="text" class="form-control" name="dob" id="date" placeholder="DOB"/>
        <span class="input-group-append">
          <span class="input-group-text bg-light d-block">
            <i class="fa fa-calendar" id="date"></i>
          </span>
        </span>
      </div>
      <!-- <script>
        (document).ready(function(){
          $("#date").datepicker();
        });
      </script> -->




        <div class="input-group date"id="datepicker1">
          <input type="text" class="form-control" placeholder="DOJ">
          <div class="input-group-append">
            <div class="input-group-text">
            <i class="fa fa-calendar" id="date"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Employment type">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Personal Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Official Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Official Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Adhar">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Permanent address">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Current Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Phone number">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Alternate emergency number">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="file" class="form-control" placeholder="profile pic">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
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
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
