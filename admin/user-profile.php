<?php
if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	$user = mysqli_query($link,"SELECT * FROM `users` WHERE`id`='$id'");
	$row = mysqli_fetch_assoc($user);
}

	
?>


<h1 style="color: #337AB7"><i class="fa fa-user"></i> User Profile <small>My Profile</small></h1>
<ol class="breadcrumb">
	<li><a href="index.php?page=dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
	<li><a href="index.php?page=user-profile"><i class="fa fa-user"></i> Profile</a></li>
</ol>


<div class="row">
	<div class="col-sm-4">
		<div class="profile-userpic">
			<img src="images/<?php if(isset($_SESSION['photo'])){echo $_SESSION['photo'];}?>" class="img-responsive" alt="">
		</div>
	</div>
	<div class="col-sm-6">
		<table class="table table-bordered">
			<tr>
				<td>User ID</td>
				<td><?php if(isset($_SESSION['id'])){echo $_SESSION['id'];}?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php if(isset($row['status'])){ echo $row['status']==1?'Active':'Inactive';}?></td>
			</tr>
			<tr>
				<td>Signup Date</td>
				<td><?php if(isset($row['updatetime'])){echo $row['updatetime'];}?></td>
			</tr>
			
		</table>
		<a href="index.php?page=update-user&id=<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];}?>" class="btn btn-primary btn-sm pull-left">Edit Profile</a>
	</div>
	
</div>


































<!--
<h1 style="color: #337AB7"><i class="fa fa-dashboard"></i> My Profile</small></h1
-->


<!--
<style type="text/css">
	

	/* Profile container */
	.profile {
		margin: 20px 0;
	}

	/* Profile sidebar */
	.profile-sidebar {
		padding: 20px 0 10px 0;
		background: #fff;
	}

	.profile-userpic img {
		float: none;
		margin: 0 auto;
		width: 50%;
		height: 50%;
		-webkit-border-radius: 50% !important;
		-moz-border-radius: 50% !important;
		border-radius: 50% !important;
	}

	.profile-usertitle {
		text-align: center;
		margin-top: 20px;
	}

	.profile-usertitle-name {
		color: #5a7391;
		font-size: 16px;
		font-weight: 600;
		margin-bottom: 7px;
	}

	.profile-usertitle-job {
		text-transform: uppercase;
		color: #5b9bd1;
		font-size: 12px;
		font-weight: 600;
		margin-bottom: 15px;
	}

	.profile-userbuttons {
		text-align: center;
		margin-top: 10px;
	}

	.profile-userbuttons .btn {
		text-transform: uppercase;
		font-size: 11px;
		font-weight: 600;
		padding: 6px 15px;
		margin-right: 5px;
	}

	.profile-userbuttons .btn:last-child {
		margin-right: 0px;
	}
	
	.profile-usermenu {
		margin-top: 30px;
	}

	.profile-usermenu ul li {
		border-bottom: 1px solid #f0f4f7;
	}

	.profile-usermenu ul li:last-child {
		border-bottom: none;
	}

	.profile-usermenu ul li a {
		color: #93a3b5;
		font-size: 14px;
		font-weight: 400;
	}

	.profile-usermenu ul li a i {
		margin-right: 8px;
		font-size: 14px;
	}

	.profile-usermenu ul li a:hover {
		background-color: #fafcfd;
		color: #5b9bd1;
	}

	.profile-usermenu ul li.active {
		border-bottom: none;
	}

	.profile-usermenu ul li.active a {
		color: #5b9bd1;
		background-color: #f6f9fb;
		border-left: 2px solid #5b9bd1;
		margin-left: -2px;
	}

	/* Profile Content */
	.profile-content {
		padding: 20px;
		background: #fff;
		min-height: 460px;
	}

</style>


<div class="row profile">
	<div class="col-sm-2"></div>
	<div class="col-sm-4">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/<?php if(isset($_SESSION['photo'])){echo $_SESSION['photo'];}?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					<?php if(isset($_SESSION['name'])){echo strtoupper($_SESSION['name']);}?>
				</div>
				<div class="profile-usertitle-job">
					Web Developer
				</div>
			</div>
			<div class="profile-userbuttons">
				<button type="button" class="btn btn-success btn-sm">Follow</button>
				<a href="index.php?page=update-user&id=<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];}?>" class="btn btn-danger btn-sm">Edit Profile</a>
			</div>
			<div class="profile-usermenu">
				<ul class="nav">
					<li class="">
						<a href="#">
							<i class="fa fa-user"></i>
						Name: <?php if(isset($_SESSION['name'])){echo strtoupper($_SESSION['name']);}?> </a>

					</li>
					<li>
						<a href="#">
							<i class="glyphicon glyphicon-user"></i>
						E-Mail: <?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?> </a>
					</li>
					<li>
						<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
						Username: <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></a>
					</li>
					<li>
						<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
						ID: <?php if(isset($_SESSION['id'])){echo $_SESSION['id'];}?> </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="profile-content">
		</div>
	</div></div>

-->


