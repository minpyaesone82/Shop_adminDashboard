<?php require "core/base.php"; ?>
<?php require "core/functions.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/vendor/bootstrap/css/bootstrap.css">
</head>
<style>
  .form-group i{
    padding-left :5px;
  }
</style>
<body style="background:var(--primary-soft);">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-4">
          <div class="card shadow">
            <div class="card-body">
              <h4 class="text-primary text-center"><i class="feather-users"></i>User Register</h4>
              <hr>
              <?php if(isset($_POST['reg-btn'])){
                echo register();
              } ?>
              <form action="" method="post">
                <div class="form-group">
                  <label for=""> <i class="feather-users text-primary mr-2"></i>Your name</label>
                  <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">  <i class="feather-mail text-primary mr-2"></i>Your email</label>
                  <input type="text" name="email" required class="form-control">
                </div>
                <div class="form-group">
                  <label for=""> <i class="feather-lock text-primary mr-2"></i>Your password</label>
                  <input type="password" name="password" required class="form-control">
                </div>
                <div class="form-group">
                  <label for=""> <i class="feather-lock text-primary mr-2"></i>Confirm password</label>
                  <input type="password" name="cPassword" required class="form-control">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" name="reg-btn"> Register</button>
                  <a href="login.php" class="btn btn-outline-primary">Sign in</a>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>


    <script src="<?php echo $url ;?>/assets/vendor/jquery-3.3.1.min.js"></script> 
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?php echo $url ;?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/way_point/jquery.waypoints.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/counter_up/counter_up.js"></script>
    <script src="<?php echo $url ;?>/assets/js/app.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/chart_js/chart.min.js"></script>
    <script src="<?php echo $url ;?>/assets/js/dashboard.js"></script>




</body>

</html>
