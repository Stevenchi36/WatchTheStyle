<?php

	session_start();
    require_once('dbConnect.php');

	$query = "INSERT INTO users(userName, userEmail,userPass) VALUES(hello,hello,hello);";
	$result = $connection->query($query);
	header("location: index.php");

?>
