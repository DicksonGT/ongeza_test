<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with the provided password) */

try {
	$link = mysqli_connect("localhost", $_REQUEST['uname'], $_REQUEST['pwd']);

	// Check connection, if none, attempt to create a database
	if($link){
	    $sql = "CREATE DATABASE ".$_REQUEST['db_name'];
		
		if(mysqli_query($link, $sql)){

			session_start();
		    $_SESSION["msg"] = "Database created successfully";

		    header("Location: form_migrate_customer.php"); 
		    
		} else{
		    echo "ERROR: Could not execute query: ". $sql. mysqli_error($link);
		}

	}else{
		echo "Connection failed";
	}
	 
	// Close connection
	mysqli_close($link);

} catch (PDOException $e) {
	echo "error occurred: ".$e;
}

?>