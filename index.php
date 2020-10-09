<?php 
require_once('admin/dbcon.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Managment System</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<div class="container">
		<br/>
		<a href="admin/login.php" class="btn btn-primary pull-right">Login</a>
		<h1 class="text-center">Welcome To Student Managment System</h1>

		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<form action="" method="POST">
					<table class="table table-bordered">
						<tr>
							<td colspan="2" class="text-center"><h3>Student Information</h3></td>

						</tr>
						<tr>
							<td><label for="class">Choose Class</label></td>
							<td>
								<select name="class" id="class" class="form-control">
									<option value="">Select</option>
									<option value="1">Class 1</option>
									<option value="2">Class 2</option>
									<option value="3">Class 3</option>
									<option value="4">Class 4</option>
									<option value="5">Class 5</option>
								</select>
							</td>
						</tr>
					<tr>
						<td><label for="roll">Roll</label></td>
						<td><input type="text" name="roll" id="roll" pattern="[0-9]{6}" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2" class="text-center"><input type="submit" value="Show Info" name="show_info" ></td>
					</tr>
				</table>
			</form>
		</div>
		<?php
		if(isset($_POST['show_info'])){
			$class = $_POST['class'];
			$roll = $_POST['roll'];
			$student = mysqli_query($link, "SELECT * FROM `student_info` WHERE `class`='$class' AND `roll`='$roll'");
			$count = mysqli_num_rows($student);
			if($count==1){
				$row = mysqli_fetch_assoc($student);
				/*$name = $row['name'];
				$roll = $row['roll'];
				$class = $row['class'];
				$city = $row['city'];
				$pcontact = $row['pcontact'];*/
				?>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<hr/>
						<table class="table table-bordered">
							<tr>
								<td rowspan="5" class="text-center">
									<br>
									<img style="height: 140px;" src="admin/images/student_img/<?=$row['photo']?>" class="img-thumbnail" alt="User Photo">
								</td>
								<td><label>Name: </label></td>
								<td><?=$row['name']?></td>
							</tr>
							<tr>
								<td><label>Roll: </label></td>
								<td><?=$row['roll']?></td>
							</tr>
							<tr>
								<td><label>Class: </label></td>
								<td><?=$row['class']?></td>
							</tr>
							<tr>
								<td><label>City: </label></td>
								<td><?=$row['city']?></td>
							</tr>
							<tr>
								<td><label>Contact: </label></td>
								<td><?=$row['pcontact']?></td>
							</tr>
						</table>
					</div>
				</div>
				<?php
			}else{ ?>


				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<hr/>
						<h1 class="text-center text-danger">Student Not Found</h1>
					</div>
				</div>
			<?php } }  ?>
		
			
		
	</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>