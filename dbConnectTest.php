<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$config = parse_ini_file('/var/www/private/config.ini');

//$dbname = 'name';
//$dbuser = 'user';
//$dbpass = 'pass';
//$dbhost = 'host';
$connect = mysql_connect($config['servername'], $config['username'], $config['password']) or die("Unable to Connect to '$dbhost'");
mysql_select_db($config['dbname']) or die("Could not open the db '$config['dbname']'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
