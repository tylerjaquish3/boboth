<?php
	//ipage connection
	/*$servername = "bobothvisionclinicco.ipagemysql.com";
	$username = "boboth15";
	$password = "bobothVC-15";
	$dbname = "bobothvisionclinic";*/
	
	//local connection
	$servername = "localhost";
	$username = "root";
	$password = "boboth1";
	$dbname = "bobothvisionclinic";
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>