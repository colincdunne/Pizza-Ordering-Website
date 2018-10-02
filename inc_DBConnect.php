<?php
	// connect and select MYySQL pizza database
	$host = "127.0.0.1";
	$username = "root";
	$password = "";
    $database = "pizzaDatabase";
	
	$DBConnect = mysqli_connect($host, $username, $password, $database);
	
	if (!$DBConnect) {
        die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	 
    
?>