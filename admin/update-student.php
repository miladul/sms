<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$student = mysqli_query($link, "SELECT * FROM `student_info` WHERE `id`='$id' ");
	$row = mysqli_fetch_assoc($student);
	/*echo '<pre>';
	print_r($row);*/
	$name = $row['name'];
	$roll = $row['roll'];
	$city = $row['city'];
	$pcontact = $row['pcontact'];
	$class = $row['class'];
	
}

if (isset($_POST['updateStudent'])) {
	/*echo '<pre>';
	print_r($_POST);
	exit();*/
	$id = $_POST['id'];
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$city = $_POST['city'];
	$pcontact = $_POST['pcontact'];
	$class = $_POST['class'];



	/*$photo = explode('.', $_FILES['photo']['name']);
	$photo_end = end($photo);
	$photo_name = $name.'_'.$roll.'.'.$photo_end;*/
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
	/*if (empty($photo_end)) {
		$input_error['photo_end'] = 'Please select a photo';
	}*/

	$error_count = count($input_error);
	if ($error_count==0) {

		$datetime = date("Y-m-d H:i:s");
		$update_data = mysqli_query($link, "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`pcontact`='$pcontact',`datetime`='$datetime' WHERE `id`='$id'");

			if ($update_data) {
				$success = "Data Update Success";
			//move_uploaded_file($_FILES['photo']['tmp_name'], 'images/student_img/'.$photo_name);
            header('location: index.php?page=all-student');
			}else{
				$error = "Your roll & class maybe error";
			}
		}
	}

?>





<h1 style="color: #337AB7"><i class="fa fa-pencil"></i> Update Student</h1>
<ol class="breadcrumb">
	<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="index.php?page=all-student"><i class="fa fa-users"></i> All Student</a></li>
	<li><a href="#">Update Student</a></li>
</ol>

<?php if(isset($success)){ echo '<div class="alert alert-success" role="alert">'.$success.'</div>'; }?>

<?php if(isset($error)){ echo '<div class="alert alert-warning" role="alert">'.$error.'</div>'; }?>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Student Name:</label>
				<input type="text" name="name" id="name" placeholder="Student Name" class="form-control" value="<?php if(isset($name)){echo $name;}?>">
				<span class="textColoDanger"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></span>
				<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}?>">
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
					<option value="1" <?= $class==1?'selected':''; ?> >Class 1</option>
					<option value="2" <?= $class==2?'selected':''; ?> >Class 2</option>
					<option value="3" <?= $class==3?'selected':''; ?> >Class 3</option>
					<option value="4" <?= $class==4?'selected':''; ?> >Class 4</option>
					<option value="5" <?= $class==5?'selected':''; ?> >Class 5</option>
				</select>
				<span class="textColoDanger"><?php if(isset($input_error['class'])){echo $input_error['class'];}?></span>
			</div>
			<!--
			<div class="form-group">
				<label for="photo">Upload Photo:</label>
				<input type="file" name="photo" id="photo" class="form-control">
				<span class="textColoDanger"><?php if(isset($input_error['photo_end'])){echo $input_error['photo_end'];}?></span>
			</div>
			-->
			<div class="form-group">
				<input type="submit" name="updateStudent" id="name" value="Update Student" class="btn btn-primary pull-right">
			</div>
			<br>
			<br>
			<br>
			
		</form>
	</div>
</div>