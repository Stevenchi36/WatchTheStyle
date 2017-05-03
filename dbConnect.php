<?php

    $config = parse_ini_file('/var/www/private/config.ini');
	$connection = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']);
	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

?>
