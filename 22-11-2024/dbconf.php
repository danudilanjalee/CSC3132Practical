<?php
//constant variable
define('SERVERNAME', '172.0.0.1:3306');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'book');
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

//echo "abc<br>";

?>