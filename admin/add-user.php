
<?php

if(isset($_POST['registration'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];


  $photo = explode('.', $_FILES['photo']['name']);
  $photo_end = end($photo);
  $photo_name = $username.'.'.$photo_end;
  //cho $photo_name;

  $input_error = array();

  if (empty($name)) {
    $input_error['name'] = 'Please enter your name';
  }
  if (empty($email)) {
    $input_error['email'] = 'Please enter your email';
  }
  if (empty($username)) {
    $input_error['username'] = 'Please enter your username';
  }
  if (empty($password)) {
    $input_error['password'] = 'Please enter a password';
  }
  if (empty($c_password)) {
    $input_error['c_password'] = 'Please enter conform passsword';
  }

  if (count($input_error)==0) {
    $email_check = mysqli_query($link, "SELECT * FROM `users` WHERE `email`='$email'");
    $result = mysqli_num_rows($email_check);

    if($result==0){
      $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username`='$username'");
      $result = mysqli_num_rows($username_check);
      if ($result==0) {
        if ($password==$c_password) {
          //echo "Yes Pass Mach";

          $new_pass = md5($password);
          $insert_data = mysqli_query($link, "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`) VALUES ('$name','$email','$username','$new_pass','$photo_name')");
          if ($insert_data) {
            $_SESSION['data_insert_success'] = "Data Insert Success";
            move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
            header('location: index.php?page=all-user');
          }else{
            $_SESSION['data_insert_error'] = "Data Insert Error";
          }
        }else{
          $password_not_mach = "Password Not Mach";
        }
      }else{
        $username_exit = "Already Registration by this username";
      }
    }else{
      $email_exit = "Already Registration by this Email";
    }

  }

}

?>






<h1 style="color: #337AB7"><i class="fa fa-dashboard"></i> Add User <small>Add New User</small></h1>
<ol class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
</ol>

<div class="row">
  <div class="col-md-10">
    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
        <label for="name" class="control-lebel col-sm-1">Name</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name" value="<?php if(isset($name)){echo $name;}?>">
          <span class="textColoDanger textItalic"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></span>
        </div>

      </div>
      <div class="form-group">
        <label for="email" class="control-lebel col-sm-1">Email</label>
        <div class="col-sm-4">
          <input class="form-control" type="email" id="email" name="email" placeholder="Enter Your Email" value="<?php if(isset($email)){echo $email;}?>">
          <span class="textColoDanger textItalic"><?php if(isset($input_error['email'])){echo $input_error['email'];}?></span>
          <span class="textColoDanger textItalic"><?php if(isset($email_exit)){ echo $email_exit; }?></span>
          
        </div>
      </div>
      <div class="form-group">
        <label for="username" class="control-lebel col-sm-1">Username</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" id="username" name="username" placeholder="Enter Your Username" value="<?php if(isset($username)){echo $username;}?>">
          <span class="textColoDanger textItalic"><?php if(isset($input_error['username'])){echo $input_error['username'];}?></span>
          <span class="textColoDanger textItalic"><?php if(isset($username_exit)){echo $username_exit;}?></span>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="control-lebel col-sm-1">Password</label>
        <div class="col-sm-4">
          <input class="form-control" type="password" id="password" name="password" placeholder="Enter Your Password" value="<?php if(isset($password)){echo $password;}?>">
          <span class="textColoDanger textItalic"> <?php if(isset($input_error['password'])){echo $input_error['password'];}?></span>
        </div>
      </div>
      <div class="form-group">
        <label for="c_password" class="control-lebel col-sm-1">Conform Password</label>
        <div class="col-sm-4">
          <input class="form-control" type="password" id="c_password" name="c_password" placeholder="Enter Your Password">
          <span class="textColoDanger textItalic"> <?php if(isset($input_error['c_password'])){echo $input_error['c_password'];}?></span>
          <span class="textColoDanger textItalic"> <?php if(isset($password_not_mach)){echo $password_not_mach;}?></span>
        </div>
      </div>
      <div class="form-group">
        <label for="photo" class="control-lebel col-sm-1">Photo</label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="photo" name="photo"/>
        </div>
      </div>
      <div class="col-sm-4 col-sm-offset-1">
        <input class="btn btn-info" type="submit" name="registration" value="Registration" />
      </div>
      
    </form>
  </div>
  
</div>
<br>
<p>If you have an account? Please <a href="login.php">Login</a>  </p>
      