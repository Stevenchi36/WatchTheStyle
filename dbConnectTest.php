<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$config = parse_ini_file('/var/www/private/config.ini');

//$dbname = 'name';
//$dbuser = 'user';
//$dbpass = 'pass';
//$dbhost = 'host';
echo $config['username'];
$connect = mysqli_connect($config['servername'], $config['username'], $onfig['password']) or die("Unable to Connect to server");
?>
