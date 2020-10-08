<?php
require_once('dbcon.php');
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

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	
	<!------ Include the above in your HEAD tag ---------->
	
	


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
					<li><a href="index.php"><i class="fa fa-user"></i> Welcome- <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?></a></li>
					<li><a href="index.php?page=add-user"><i class="fa fa-user-plus"></i> Add User</a></li>
					<li><a href="index.php?page=user-profile"><i class="fa fa-user"></i> Profile</a></li>
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
					<a href="index.php?page=dashboard" class="list-group-item active"><i class="fa fa-dashboard"></i> Dashboard </a>
					<a href="index.php?page=add-student" class="list-group-item"><i class="fa fa-user-plus"></i> Add Student</a>
					<a href="index.php?page=all-student" class="list-group-item"><i class="fa fa-users"></i> All Student</a>
					<a href="index.php?page=all-user" class="list-group-item"><i class="fa fa-users"></i> All User</a>
				</div>
			</div>
			<!------------End Rightbar menu------------------->

			<div class="col-sm-9">


				<div class="content">
					<?php 
					//require_once('dashboard.php');
					if(isset($_GET['page'])){
						$page = $_GET['page'].'.php';
					}else{
						$page = 'dashboard.php';
					}
					if(file_exists($page)){
							require_once $page;
						}else{
							require_once ('404.php');
						}

					


					?>
					
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