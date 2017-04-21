<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>Home | Watch the Style</title>

  <link rel="mask-icon" href="Assets/safariPin.svg" color="cornflowerblue">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
  <link rel="icon" href="Assets/favicon.png" type="image/x-icon">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
    <nav class="hidden-xs navbar-fixed">
        <ul>
            <li id="brandItem" class="brandItem"><a href="index.php" class="brand active" title="Home">Watch the Style</a></li>
            <li><a href="" class="aboutMe" onClick="changeActiveAbout()" title="New Post">New</a></li>
            <li><a href="" class="projects" onClick="changeActiveProj()" title="Search">Search</a></li>
            <li style="float:right" class="contactMeList lastLi"><a class="contactMe" href="register.php" onClick="changeActiveContact()" title="Register a new account">Register</a></li>
            <li style="float:right" class="contactMeList"><a class="contactMe" href="/login" onClick="changeActiveContact()" title="Login to account">Login</a></li>
        </ul>
    </nav>
</body>
</html>
