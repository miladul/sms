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
<body >
	<dir class="container">
		<br/>
		<a href="admin/login.php" class="btn btn-primary pull-right">Login</a>
		<h1 class="text-center">Welcome To Student Managment System</h1>

		<dir class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<form action="" method="POST">
					<table class="table table-bordered">
						<tr>
							<td colspan="2" class="text-center"><label>Student Information</label></td>

						</tr>
						<tr>
							<td><label for="choose">Choose Class</label></td>
							<td>
								<select name="choose" id="choose" class="form-control">
									<option value="">Select</option>
									<option value="1">Class 1</option>
									<option value="2">Class 2</option>
									<option value="3">Class 3</option>
									<option value="4">Class 4</option>
									<option value="5">Class 5</option>
								</select>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="roll">Roll</label></td>
						<td><input type="text" name="roll" id="roll" pattern="[0-9]{6}" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2" class="text-center"><input type="submit" name="Show Info" name="show_info" ></td>

					</tr>

				</table>

			</form>
		</div>
	</dir>


</div>













<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>