
<h1 style="color: #337AB7"><i class="fa fa-lock"></i> All Inactive User</h1>
<ol class="breadcrumb">
	<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="index.php"> Inactive Users</a></li>
</ol>




<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped" style="width:100%" id="example">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$all_users = mysqli_query($link,"SELECT * FROM `users` WHERE `status`=0");
			while($rows = mysqli_fetch_assoc($all_users)){
				?>
				<tr>
					<td><?=$rows['id']?></td>
					<td><?=ucwords($rows['name'])?></td>
					<td><?=$rows['email']?></td>
					<td><?=$rows['username']?></td>
					<td><img height="40px" src="<?='images/'.$rows['photo']?>"></td>
					<td>
						<a href="index.php?page=update-user&id=<?=$rows['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
						<a href="index.php?page=delete-user&id=<?=$rows['id']?>" class="btn btn-success"><i class="fa fa-trash"></i> Delete</a>
					</td>
				</tr>
			<?php } ?>

		</tbody>
	</table>
</div>