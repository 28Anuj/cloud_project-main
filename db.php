<?php 
	$dbhost = 'php-database.cccpmqr1ygaq.us-east-1.rds.amazonaws.com';
	$dbuser = 'admin';
	$dbpass = '12345678';
	$dbname = 'php-database';
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
	
	return $conn;
?>