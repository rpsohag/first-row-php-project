<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container col-md-6 col-md-offset-3">
  <h2 class="text-center">Admin Login</h2>

  <form class="user" action="login-post.php" method="POST">

<div class="form-group">
<input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
<span class="text-danger">
<?php
            if(isset($_SESSION['email'])){
                echo $_SESSION['email'];
                unset ($_SESSION['email']);
            }
          ?>
</span>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
<span class="text-danger">
<?php
            if(isset($_SESSION['password'])){
                echo $_SESSION['password'];
                unset ($_SESSION['password']);
            }
          ?>
</span>
</div>
</div>

<button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
<hr>
</form>
</div>

</body>
</html>
