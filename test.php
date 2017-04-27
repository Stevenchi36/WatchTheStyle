<?php

	$config = parse_ini_file('/var/www/private/config.ini');
	$connection = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']);
	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}
	$query = "INSERT INTO users(userName, userEmail,userPass) VALUES('hello','hello','hello')";

	if(mysqli_query($connection, $query)){
		echo "New record created successfully";
	}
	else{
		echo "Error: " . $query . "<br>" . mysqli_error($connection);
	}

	mysqli_close($connection);

?>
