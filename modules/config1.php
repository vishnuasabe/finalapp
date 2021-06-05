<?php

	//  Development connection
	
	// $databaseHost = 'localhost';
	// $databaseName = 'studentdatabase';
	// $databaseUsername = 'root';
	// $databasePassword = '';

	// remote Database connection
	
	$databaseHost = 'remotemysql.com';
	$databaseName = 'scsSFmGmWh';
	$databaseUsername = 'scsSFmGmWh';
	$databasePassword = 'M7o0atwH3V';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>