<?php
require_once('dbcon.php');
if(isset($_GET['student'])){
	$id = base64_decode($_GET['student']);

	$delete = mysqli_query($link,"DELETE FROM `student_info` WHERE `id`='$id'");
	if($delete){
		echo $delete_msg = "Data has been Deleted";
		header('location: index.php?page=all-student');
	}
}

?>