<?php
session_start();

if (isset($_SESSION['db_name'])) {
	$con = mysqli_connect("localhost", $_SESSION['db_uname'],  $_SESSION['db_pwd'], $_SESSION['db_name']);
	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}	
}


?>