<?php
//require_once('dbcon.php'); //no need for require on index.php

if (isset($_POST['addStudent'])) {
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$city = $_POST['city'];
	$pcontact = $_POST['pcontact'];
	$class = $_POST['class'];



	$photo = explode('.', $_FILES['photo']['name']);
	$photo_end = end($photo);
	$photo_name = $name.'.'.$photo_end;
	//cho $photo_name;
	$input_error = array();


	if (empty($name)) {
		$input_error['name'] = 'Please enter a name';
	}
	if (empty($roll)) {
		$input_error['roll'] = 'Please enter a roll';
	}
	if (empty($city)) {
		$input_error['city'] = 'Please enter your city';
	}
	if (empty($pcontact)) {
		$input_error['pcontact'] = 'Please enter a pcontact';
	}
	if (empty($class)) {
		$input_error['class'] = 'Please select a class';
	}
	if (empty($photo_end)) {
		$input_error['photo_end'] = 'Please select a photo';
	}

	$error_count = count($input_error);
	if ($error_count==0) {
		$roll_class_check = mysqli_query($link, "SELECT * FROM `student_info` WHERE `roll`='$roll' AND `class`='$class'");
		$result = mysqli_num_rows($roll_class_check);
		if($result==0){
			$datetime=date("F j, Y, g:i a");
			
			$insert_data = mysqli_query($link, "INSERT INTO `student_info`(`name`, `roll`, `class`, `city`, `pcontact`, `photo`, `datetime`) VALUES ('$name','$roll','$class','$city','$pcontact','$photo_name','$datetime')");
			if ($insert_data) {
				$_SESSION['std_data_insert_success'] = "Data Insert Success";
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/student_img/'.$photo_name);
            header('location: index.php?page=add-student');
			}
		}else{
			$error = "Alredy added this student";
		}
		
	}else{
		$error = "Please fill up all the field";
	}
	
}

?>














<h1 style="color: #337AB7"><i class="fa fa-user-plus"></i> Add New Student</small></h1>
<ol class="breadcrumb">
	<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="index.php?page=add-student">Add Student</a></li>
</ol>

<?php if(isset($_SESSION['std_data_insert_success'])){ echo '<div class="alert alert-success" role="alert">'.$_SESSION['std_data_insert_success'].'</div>'; }?>

<?php if(isset($error)){ echo '<div class="alert alert-warning" role="alert">'.$error.'</div>'; }?>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Student Name:</label>
				<input type="text" name="name" id="name" placeholder="Student Name" class="form-control" value="<?php if(isset($name)){echo $name;}?>">
				<span class="textColoDanger"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></span>
			</div>
			<div class="form-group">
				<label for="roll">Student Roll:</label>
				<input type="text" name="roll" id="roll" placeholder="Student Roll" pattern="[0-9]{6}" class="form-control" value="<?php if(isset($roll)){echo $roll;}?>">
				<span class="textColoDanger"><?php if(isset($input_error['roll'])){echo $input_error['roll'];}?></span>
			</div>
			<div class="form-group">
				<label for="city">City:</label>
				<input type="text" name="city" id="city" placeholder="City" class="form-control" value="<?php if(isset($city)){echo $city;}?>">
				<span class="textColoDanger"><?php if(isset($input_error['city'])){echo $input_error['city'];}?></span>
			</div>
			<div class="form-group">
				<label for="pcontact">Parent Contact:</label>
				<input type="text" name="pcontact" id="pcontact" placeholder="Student Name" pattern="[0-9]{11}" class="form-control" value="<?php if(isset($pcontact)){echo $pcontact;}?>">
				<span class="textColoDanger"><?php if(isset($input_error['pcontact'])){echo $input_error['pcontact'];}?></span>
			</div>
			<div class="form-group">
				<label for="class">Class:</label>
				<select id="class" name="class" class="form-control">
					<option value="0">Select</option>
					<option value="1">Class 1</option>
					<option value="2">Class 2</option>
					<option value="3">Class 3</option>
					<option value="4">Class 4</option>
					<option value="5">Class 5</option>
				</select>
				<span class="textColoDanger"><?php if(isset($input_error['class'])){echo $input_error['class'];}?></span>
			</div>
			<div class="form-group">
				<label for="photo">Upload Photo:</label>
				<input type="file" name="photo" id="photo" class="form-control">
				<span class="textColoDanger"><?php if(isset($input_error['photo_end'])){echo $input_error['photo_end'];}?></span>
			</div>
			<div class="form-group">
				<input type="submit" name="addStudent" id="name" value="Add Student" class="btn btn-primary pull-right">
			</div>
			<br>
			<br>
			<br>
			
		</form>
	</div>
</div>