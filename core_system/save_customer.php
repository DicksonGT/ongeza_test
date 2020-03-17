<!DOCTYPE html>
<html>
<head>
 <title> Ongeza Save Customer </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 

	include("database_conn.php");

	$id=$_REQUEST['id'];
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$town_name=$_REQUEST['town_name'];
	$gender_id=$_REQUEST['gender_id'];

	
	//update query vs insert
	if (isset($_REQUEST['id'])) {
		mysqli_query($con,"UPDATE customers SET first_name = '".$first_name."', last_name = '".$last_name."', town_name = '".$town_name."', gender_id = '".$gender_id."' WHERE id = $id;");
	}else{
		mysqli_query($con,"INSERT INTO `customers` (`first_name`, `last_name`, `town_name`, `gender_id`) VALUES ('".$first_name."', '".$last_name."', '".$town_name."', '".$gender_id."');");
	}
?>
<div class="info">
<?php
	if (isset($_REQUEST['id'])) {
		echo "<h1> Customer " . $first_name ." Updated! </h1><br />";
	}else{
		echo "<h1> Customer " . $first_name ." Saved! </h1><br />";
	}
?>
<a href="../views/customers.php">Back to Customers</a>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>