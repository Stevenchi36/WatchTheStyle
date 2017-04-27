<?php

	$config = parse_ini_file('/var/www/private/config.ini');
	$connection = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']);
	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
	}

	if (isset($_POST['btnRegister'])) {
		session_start();
    	require_once('dbConnect.php');
		$username = mysqli_real_escape_string($_POST['usernameInput']);
		$username = trim($_POST[$username]);
		$username = strip_tags($username);
		$username = htmlspecialchars($username);
		$query = "INSERT INTO users(userName, userEmail,userPass) VALUES('$username','z','b')";
		if(mysqli_query($connection, $query)){
			echo "New record created successfully";
		}
		else {
			echo "Error: " . $query . "<br>" . mysqli_error($connection);
		}
	}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Register | Watch the Style</title>

    <link rel="mask-icon" href="Assets/safariPin.svg" color="cornflowerblue">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="icon" href="Assets/favicon.png" type="image/x-icon">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="JS/register.js"></script>
    <link rel="stylesheet" type="text/css" href="master.css">
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <nav class="hidden-xs navbar-fixed">
        <ul>
            <li id="brandItem" class="brandItem"><a href="index.php" class="brand" title="Home">Watch the Style</a></li>
            <li><a href="" class="aboutMe" title="New post">New</a></li>
            <li><a href="" class="projects" title="Search">Search</a></li>
            <li style="float:right" class="contactMeList"><a class="contactMe active" href="register.php" title="Register New Account">Register</a></li>
            <li style="float:right" class="contactMeList"><a class="contactMe" href="/login.php" title="Login to account">Login</a></li>
        </ul>
    </nav>
    <form method='post' action="register.php">
        <table class='signinOptions'>
            <tr>
                <td class='lblInputs'>Username:</td>
                <td><input type='text' name='usernameInput' pattern=".{4,30}" title="Username must be at least 4 characters" maxlength="30" size='50'  required /></td>
            </tr>
            <tr>
                <td class='lblInputs'>Email:</td>
                <td><input type='email' name='emailInput' required size='50' required/></td>
            </tr>
            <tr>
                <td class='lblInputs'>Password:</td>
                <td><input type='password' name='passwordInput1' id='password1' pattern=".{6,}" maxlength="256" title="Password must be at least 6 characters" size='50' required/></td>
            </tr>
            <tr>
                <td class='lblInputs'>Confirm Password:</td>
                <td><input type='password' name='passwordInput2' id='password2' pattern=".{6,}" maxlength="256" title='Passwords must match' size='50' required /></td>
            </tr>
            <tr>
                <td></td>
                <td><span id='pwError' style='color:red;'></span></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' class='btnRegister' value='Register' id='register' name='btnRegister' disabled/></td>
            </tr>
        </table>
    </form>
</body>
</html>
