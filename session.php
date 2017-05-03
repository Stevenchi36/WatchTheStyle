<?php

	$config = parse_ini_file('/var/www/private/config.ini');
	$connection = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']);
	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}


	session_start();
	$loggedIn = true;
	$userCheck = $_SESSION['loginUser'];

	$sessionQuery = mysqli_query($connection, "SELECT userName FROM users WHERE userName='$userCheck'");

	$sessionRow = mysqli_fetch_array($sessionQuery, MYSQLI_ASSOC);

	$sessionUser = $sessionRow['userName'];

	if(!isset($_SESSION['loginUser'])){
		$loggedIn = false;
		header("location: login.php");
	}
?>
