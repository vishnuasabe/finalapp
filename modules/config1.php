<?php

	//  Development connection
	
	// $databaseHost = 'localhost';
	// $databaseName = 'studentdatabase';
	// $databaseUsername = 'root';
	// $databasePassword = '';

	// remote Database connection
	
	$databaseHost = 'db4free.net';
	$databaseName = 'attendance9999';
	$databaseUsername = 'omkarpendpale001';
	$databasePassword = 'Test@126';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
