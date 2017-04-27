<?php

	$connection = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);
	session_start();
//    require_once('dbConnect.php');
	$config = parse_ini_file('/var/www/private/config.ini');
	$query = "INSERT INTO users(userName, userEmail,userPass) VALUES(hello,hello,hello);";
	mysqli_query($connection, $query);
	header("location: index.php");

?>
