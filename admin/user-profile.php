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



































