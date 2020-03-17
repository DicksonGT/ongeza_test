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
	
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$town_name=$_REQUEST['town_name'];
	$gender_id=$_REQUEST['gender_id'];


	mysqli_query($con,"INSERT INTO `customer` (`first_name`, `last_name`, `town_name`, `gender_id`) VALUES ('".$first_name."', '".$last_name."', '".$town_name."', '".$gender_id."');");
?>
<div class="info">
<h1> Customer Saved! </h1><br />
<a href="../views/customers.php">Back to Customers</a>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>