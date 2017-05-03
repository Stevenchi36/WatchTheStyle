<?php

	include('dbConnect.php');

	session_start();
	$userCheck = $_SESSION['loginUser'];

	$sessionQuery = mysqli_query($connection, "SELECT userName FROM users WHERE userName='$userCheck'");

	$sessionRow = mysqli_fetch_array($sessionQuery, MYSQLI_ASSOC);

	$sessionUser = $row['userName'];

	if(!isset($_SESSION['loginUser'])){
		header("location: login.php");
	}
?>
