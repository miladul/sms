<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>SMS</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../css/style.css" rel="stylesheet">
	<!-- dataTable css -->
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	

	<!-- js for dataTable -->
	<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/style.js"></script>
	
	


</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Student Manahment System</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"><i class="fa fa-user"></i> Welcome-Miladul Islam</a></li>
					<li><a href="logout.php"><i class="fa fa-user-plus"></i> Add User</a></li>
					<li><a href="logout.php"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<!------------------Start Rightbar menu------->
				<div class="list-group">
					<a href="#" class="list-group-item active"><i class="fa fa-dashboard"></i> Dashboard </a>
					<a href="#" class="list-group-item"><i class="fa fa-user-plus"></i> Add Student</a>
					<a href="#" class="list-group-item"><i class="fa fa-users"></i> All Student</a>
					<a href="#" class="list-group-item"><i class="fa fa-users"></i> ALl Users</a>
				</div>
			</div>
			<!------------End Rightbar menu------------------->

			<div class="col-sm-9">
				<div class="content">
					<h1 style="color: #337AB7"><i class="fa fa-dashboard"></i> Dashboard <small>Statics Overview</small></h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
						<li><a href="#">Library</a></li>
					</ol>
					<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right"> All student</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">All Students</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right"> All student</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">All Students</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right"> All student</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">All Students</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<hr/>
					<h3>New Students </h3>
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped" style="width:100%" id="example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Roll</th>
								<th>City</th>
								<th>Contact</th>
								<th>Photo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Miladul Islam</td>
								<td>123456</td>
								<td>Narail</td>
								<td>0191900000</td>
								<td>me.jpg</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Miladul Islam</td>
								<td>123456</td>
								<td>Narail</td>
								<td>0191900000</td>
								<td>me.jpg</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Miladul Islam</td>
								<td>123456</td>
								<td>Narail</td>
								<td>0191900000</td>
								<td>me.jpg</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Miladul Islam</td>
								<td>123456</td>
								<td>Narail</td>
								<td>0191900000</td>
								<td>me.jpg</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Miladul Islam</td>
								<td>123456</td>
								<td>Narail</td>
								<td>0191900000</td>
								<td>me.jpg</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Rahim</td>
								<td>123456</td>
								<td>Narail</td>
								<td>0191900000</td>
								<td>me.jpg</td>
							</tr>
							
						</tbody>
					</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- -----container-fluid end--------------------- -->

	<!----------------Footer start-------------------- -->
	<footer class="footer-area">
		<p>&copy; Copyright-2020 miladul@example.com </p>
	</footer>


	


</body>
</html>