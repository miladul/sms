<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');

}


?>


<a href="logout.php">Logout</a>