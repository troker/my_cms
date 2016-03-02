<?php  

/**
 * Init connection to DB
 */
 
$dblocation = '127.0.0.1';
$dbname = 'my_shop';
$dbuser = 'root';
$dbpassword = '';

$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if(!$db) {
	echo "MySql error connection";
	exit;
}

mysql_set_charset('utf8');

if(! mysql_select_db($dbname, $db)) {
	echo "error connection to $dbname db";
	exit;
}