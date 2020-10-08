<?php

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = mysqli_query($link, "SELECT * FROM `users` WHERE `id`='$id' ");
  $result = mysqli_num_rows($query);
  if($result==1){
    $row = mysqli_fetch_assoc($query);
    /*echo "<pre>";
    print_r($row);
    exit();*/

    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $photo = $row['photo'];
    //$name = $row['name'];
  }else{
    echo "id not found";
  }
}

if(isset($_POST['update'])){
  /*if (isset ($_FILES['image'])){
    echo 'yes';


  } else {    
    echo 'no';      
  }*/

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $c_password = md5($_POST['c_password']);


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
    if($password == $c_password){
      mysqli_query($link, "UPDATE `users` SET `name`='$name',`email`='$email',`username`='$username',`password`='$password',`photo`='$photo_name' WHERE `id`='$id'");
      move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
      header('location: index.php?page=all-user');
    }

    
  }

}

?>



<h1 style="color: #337AB7"><i class="fa fa-user"></i> Edit Profile <small>Edit Profile</small></h1>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
  <li><a href="index.php?page=user-profile"><i class="fa fa-pencil"></i> Edit Profile</a></li>
</ol>




<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
        <label for="name" class="control-lebel col-sm-1">Name</label>
        <div class="col-sm-4">
          <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}?>">
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
          <input class="form-control" type="password" id="password" name="password" placeholder="Enter Your Password" value="">
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
        <label for="photo" class="control-lebel col-sm-1">Old Photo</label>
        <div class="col-sm-4">
          <img style="width: 70px" src="images/<?= $photo?>">
        </div>
      </div>
      <div class="form-group">
        <label for="photo" class="control-lebel col-sm-1">New Photo</label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="photo" name="photo"/>
        </div>
      </div>

      <div class="col-sm-4 col-sm-offset-1">
        <input class="btn btn-info" type="submit" name="update" value="Update User" />
      </div>

    </form>
  </div>

</div>
<br>
<p>If you have an account? Please <a href="login.php">Login</a>  </p>
<hr>
<footer>
  <p>copyright &copy; 2018 - <?php echo date("Y"); ?> All rights reserved</p>
</footer>
