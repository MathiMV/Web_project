<?php
define('SERVERNAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'vechicle');
try {
	//connect with database
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
		//echo "Connected successfully";
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}
?>