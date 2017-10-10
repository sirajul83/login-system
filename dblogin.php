<?php
	$server = "localhost";
	$user   = "root";
	$pass   = "";
	$db     = "userlogin";
	$con = new mysqli($server,$user,$pass,$db);
	if($con->connect_error){
		echo "Database not connect".$con->connct_error;
	}

?>