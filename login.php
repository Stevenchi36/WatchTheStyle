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
  <link rel="stylesheet" type="text/css" href="CSS/master.css">
  <link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
    <nav class="hidden-xs navbar-fixed">
        <ul>
            <li id="brandItem" class="brandItem"><a href="index.php" class="brand" title="Home">Watch the Style</a></li>
            <li><a href="" class="aboutMe" title="New post">New</a></li>
            <li><a href="" class="projects" title="Search">Search</a></li>
            <li style="float:right" class="contactMeList"><a class="contactMe" href="register.php" title="Register New Account">Register</a></li>
            <li style="float:right" class="contactMeList"><a class="contactMe active" href="/login.php" title="Login to account">Login</a></li>
        </ul>
    </nav>
    <form method='post' action='login.php'>
    	<table class="loginOptions">
    		<tr>
    			<td><input type='text' name="usernameInput" id='usernameInput' pattern="^[a-zA-Z0-9_-]{4,20}$" maxlength="20" size='50' placeholder="Username"  required /></td>
    		</tr>
    		<tr>
    			<td><input type='password' name='passwordInput' id='password' pattern=".{8,}" maxlength="256" size='50' placeholder="Password" required/></td>
    		</tr>
    		<tr>
    			<td><input type='submit' class='btnLogin' value='Login' id='login' name='btnLogin' disabled/></td>
    		</tr>
    	</table>
    </form>
</body>
</html>
