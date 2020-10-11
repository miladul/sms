
<h1 style="color: #337AB7"><i class="fa fa-users"></i> All Student</h1>
<ol class="breadcrumb">
	<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="index.php"> All Student</a></li>
</ol>

<?php if(isset($_GET['added'])){ echo '<div class="alert alert-success" role="alert">New Student Added Successfully</div>'; }?>


<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped" style="width:100%" id="example">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Class</th>
				<th>City</th>
				<th>P.Contact</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$all_student = mysqli_query($link,"SELECT * FROM `student_info` ORDER BY `id` DESC");
			while($rows = mysqli_fetch_assoc($all_student)){
				?>
				<tr>
					<td><?=$rows['id']?></td>
					<td><?=ucwords($rows['name'])?></td>
					<td><?=$rows['roll']?></td>
					<td><?=$rows['class']?></td>
					<td><?=$rows['city']?></td>
					<td><?=$rows['pcontact']?></td>
					<td><img height="40px" src="<?='images/student_img/'.$rows['photo']?>"></td>
					<td>
						<a href="index.php?page=update-student&id=<?=$rows['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
						<a href="delete-student.php?student=<?=base64_encode($rows['id'])?>" class="btn btn-success"><i class="fa fa-trash"></i> Delete</a>
					</td>
				</tr>
			<?php } ?>

		</tbody>
	</table>