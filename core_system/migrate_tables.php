<?php
	session_start();
    
    $conn = mysqli_connect("localhost","root","123","qqww");
	try {	
		$sql_customer = "CREATE TABLE customers (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(25) NOT NULL,
		last_name VARCHAR(25) NOT NULL,
		town_name VARCHAR(25) NOT NULL,
		gender_id INT(1),
		is_deleted INT NOT NULL DEFAULT 0
		)";

		$sql_gender = "CREATE TABLE gender (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		gender_name VARCHAR(25) NOT NULL
		)";

		if ($conn->query($sql_customer) === TRUE) {
		    $msg1 = "Table Customers created successfully";
		} else {
		    $msg1 = "Error creating table: " . $conn->error;
		}
		$_SESSION['msg1'] = "Table Customers created successfully";

		if ($conn->query($sql_gender) === TRUE) {
		    $msg2 = "Table Gender created successfully";
		} else {
		    $msg2 = "Error creating table: " . $conn->error;
		}
		$_SESSION['msg2'] = "Table Gender created successfully";
	}
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

	$conn->close();

?>