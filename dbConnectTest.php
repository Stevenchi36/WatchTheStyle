<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$config = parse_ini_file('/var/www/private/config.ini');
$connect = mysqli_connect('localhost', $config['username'], $config['password']) or die("Unable to Connect to server");
echo $config['username'];
mysqli_select_db($connect, $config['dbname']) or die("Could not connect to database");

$test_query = "SHOW TABLES FROM WatchTheStyle";
$result = mysqli_query($connect, $test_query);
$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
?>
