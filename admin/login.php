<?php

require_once('dbcon.php');

session_start();
if(isset($_SESSION['username'])){
  header('location: index.php');

}
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $check_username = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$username'");
  $row_count = mysqli_num_rows($check_username);
  $row = mysqli_fetch_assoc($check_username);
  if ($row_count==1) {
    if ($row['password']==md5($password)) {
      if ($row['status']==1) {
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['username']=$row['username'];
        $_SESSION['photo']=$row['photo'];
        header('location: index.php');
      }else{
        $error =  "Your Status Inactive";
      }

    }else{
      $error =  "Password Not Mach";
    }

  }else{
    $error =  "Username Not Found";
  }

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animate.min.css" />


</head>
<body>
  <div class="container animated shake">
    <h1 class="text-center">Student Management System</h1>
    <br>
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <h2 class="text-center">Admin Login Form</h2>
        <?php if(isset($error)){ echo '<div class="alert alert-danger" role="alert">'.$error.'</div>'; }?>
        <form action="login.php" method="POST">
          <div class="">
            <input type="text" name="username" placeholder="Username" required="" class="form-control" value="<?php if(isset($username)){echo $username;}?>">
          </div>
          <div class="">
            <input type="password" name="password" placeholder="Password" required="" class="form-control" value="<?php if(isset($password)){echo $password;}?>">
          </div>
          <br>
          <div class="">
            <input type="submit" name="login" value="Login" class="btn btn-info pull-right">
          </div>
          <br>
          <br>
          <br>
          <div class="">
            <p>If you haven't account? <a href="registration.php">Create a new account</a></p>
          </div>

          <hr>
          <footer>
            <p>copyright &copy; 2018 - <?php echo date("Y"); ?> All rights reserved</p>
          </footer>



        </form>
      </div>
    </div>
  </div> 

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>