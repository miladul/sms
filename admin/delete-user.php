<?php
require_once('dbcon.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	

	$delete = mysqli_query($link,"DELETE FROM `users` WHERE `id`='$id'");
	if($delete){
		echo $delete_msg = "Data has been Deleted";
		header('location: index.php?page=all-user');
	}
}

?>