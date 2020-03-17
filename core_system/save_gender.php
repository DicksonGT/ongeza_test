<!DOCTYPE html>
<html>
<head>
 <title> Ongeza Save Gender </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 

	include("database_conn.php");

	$gender_name=$_REQUEST['gender_name'];
	mysqli_query($con,"INSERT INTO gender (gender_name) VALUES ('".$gender_name."');");

?>
<div class="info">
<h1> Gender <?php echo $gender_name ?> Saved! </h1><br />
<a href="../views/customers.php">Back to Customers</a>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>