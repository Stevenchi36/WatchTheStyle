<?php
    ob_start();
    session_start();
    //if already logged in, go to index.php
    if(isset($_SESSION['user'])!=""){
        header('Location: index.php');
    }
    include_once 'dbConnect.php';

    $error = false;

    //once register button is pressed
    if(isset($_POST['btnRegister'])){
        //Clean user input
        $username = trim($_POST['username']);
        $username = strip_tags($username);
        $username = htmlspecialchars($username);

        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);

        $passwd = trim($_POST['passwd']);
        $passwd = strip_tags($passwd);
        $passwd = htmlspecialchars($passwd);

        //Validation
        //USERNAME
        if(empty($username)){
            $error = true;
            $nameError = "Enter a username.";
        }
        else if(strlen($username) < 4){
            $error = true;
            $nameError = "Username must be at least 4 characters long.";
        }
        else if(!preg_match"/^[a-z\d_]{4,20}$/i", $username){
            $error = true;
            $nameError = "Username can only contain letters, numbers, or underscores.";
        }
        else{
            //Check for existing username
            $query = "SELECT username FROM users WHERE username='$username'";
            $result = mysql_query($query);
            $count = mysql_num_rows($result);
            if($count != 0){
                $error = true;
                $emailError = "Username is already in use."
            }
        }
        //EMAIL
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = true;
            $emailError = "Enter a valid email address";
        }
        else{
            //Check for existing email
            $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
            $result = mysql_query($query);
            $count = mysql_num_rows($result);
            if($count != 0){
                $error = true;
                $emailError = "Email is already in use."
            }

        }
        //PASSWORD
        if(empty($passwd)){
            $error = true;
            $passError = "Enter a password.";
        }
        else if(strlen($passwd) < 6){
            $error = true;
            $passError = "Password must be at least 6 characters.";
        }

        //ENCRYPT PASSWORD
        $passwd = hash('sha256', $passwd);

        //ENTER INTO DATABASE
        if(!$error){
            $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$username','$email','$passwd')";
            $res = mysql_query($query);

            if($res){
                $errTyp = "success";
                $errMSG = "Successfully resgistered. You can login now.";
                unset($username);
                unset($email);
                unset($passwd);
            }
            else{
                $errTyp = "danger";
                $errMSG = "Something went wrong, try again later.";
            }
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
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
  <link rel="icon" href="Assets/favicon.png" type="image/x-icon">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="master.css">
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
</body>
</html>
<?php ob_end_flush(); ?>
