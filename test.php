<?php

	session_start();
//    require_once('dbConnect.php');
	$config = parse_ini_file('/var/www/private/config.ini');
	$connection = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);
	$query = "INSERT INTO users(userName, userEmail,userPass) VALUES(hello,hello,hello);";
	$result = $connection->query($query);
	header("location: index.php");

?>
