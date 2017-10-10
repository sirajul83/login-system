<?php
	$server ="localhost";
	$user = "root";
	$pass = "";
	$db   = "blogsite";
	$con  = new mysqli($server,$user,$pass,$db);
	if($con->connect_error){
		echo "Database not connect".$con->connect_error;
		
	}
?>