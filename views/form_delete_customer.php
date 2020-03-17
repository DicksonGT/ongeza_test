<!DOCTYPE html>
<html>
<head>
 <title> Ongeza Delete Customer </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	
	include("../core_system/database_conn.php");

	$id=$_GET['id'];
	
	mysqli_query($con,"DELETE FROM customers WHERE id = $id;");

?>
<div class="info">
<h1> Customer Deleted! </h1><br />
<a href="../views/customers.php">Back to Customers</a>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>