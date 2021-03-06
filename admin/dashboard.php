<?php
$students = mysqli_num_rows(mysqli_query($link,"SELECT * FROM `student_info`"));
$users = mysqli_num_rows(mysqli_query($link,"SELECT * FROM `users`"));
$inactive_users = mysqli_num_rows(mysqli_query($link,"SELECT * FROM `users` WHERE `status`=0"));
$active_users = mysqli_num_rows(mysqli_query($link,"SELECT * FROM `users` WHERE `status`=1"));

 
?>




<h1 style="color: #337AB7"><i class="fa fa-dashboard"></i> Dashboard <small>Statics Overview</small></h1>
<ol class="breadcrumb">
	<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
</ol>
<div class="row">
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
					<div class="col-xs-9">
						<div class="pull-right" style="font-size: 45px"><?php if(isset($students)){echo $students;}?></div>
						<div class="clearfix"></div>
						<div class="pull-right"> All student</div>
					</div>
				</div>
			</div>
			<a href="index.php?page=all-student">
				<div class="panel-footer">
					<span class="pull-left">View All Students List</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3"><i class="fa fa-user-secret fa-5x"></i></div>
					<div class="col-xs-9">
						<div class="pull-right" style="font-size: 45px"><?php if(isset($users)){echo $users;}?></div>
						<div class="clearfix"></div>
						<div class="pull-right"> All User</div>
					</div>
				</div>
			</div>
			<a href="index.php?page=all-user">
				<div class="panel-footer">
					<span class="pull-left">View All User List</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3"><i class="fa fa-thumbs-o-up fa-5x"></i></div>
					<div class="col-xs-9">
						<div class="pull-right" style="font-size: 45px"><?php if(isset($active_users)){echo $active_users;}?></div>
						<div class="clearfix"></div>
						<div class="pull-right"> Active User</div>
					</div>
				</div>
			</div>
			<a href="index.php?page=active-user">
				<div class="panel-footer">
					<span class="pull-left">View Active User List</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3"><i class="fa fa-thumbs-o-down fa-5x"></i></div>
					<div class="col-xs-9">
						<div class="pull-right" style="font-size: 45px"><?php if(isset($inactive_users)){echo $inactive_users;}?></div>
						<div class="clearfix"></div>
						<div class="pull-right"> Inactive User</div>
					</div>
				</div>
			</div>
			<a href="index.php?page=inactive-user">
				<div class="panel-footer">
					<span class="pull-left">View Inactive User List</span>
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
				<th>P.Contact</th>
				<th>Photo</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$all_student = mysqli_query($link,"SELECT * FROM `student_info` ORDER BY `id` DESC LIMIT 5");
							//always show latest 5 students
			while($rows = mysqli_fetch_assoc($all_student)){
				?>
				<tr>
					<td><?=$rows['id']?></td>
					<td><?=ucwords($rows['name'])?></td>
					<td><?=$rows['roll']?></td>
					<td><?=$rows['city']?></td>
					<td><?=$rows['pcontact']?></td>
					<td><img height="50px" src="<?='images/student_img/'.$rows['photo']?>"></td>
					
				</tr>
			<?php } ?>
			
		</tbody>
	</table>
</div>