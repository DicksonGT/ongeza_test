<!DOCTYPE html>
<html>
<head>
 <title> Ongeza New Customer </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	
	include("../core_system/database_conn.php");
	
	$gender = mysqli_query($con,"SELECT * FROM gender;");
	//$getRowAssoc = mysqli_fetch_assoc($gender);
	//echo "string". $getRowAssoc['gender_name'];

?>
<div class="info" style="max-width:500px;">
<form action="../core_system/save_customer.php" method="post">
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Add New Customer</h1></td></tr>
<tr><th>First Name</th><td><input type="text" class="input" name="first_name" required></td></tr>
<tr><th>Last Name</th><td><input type="text" class="input" name="last_name" required></td></tr>
<tr><th>Town Name</th><td><input type="text" class="input" name="town_name" required></td></tr>
<tr><th>Gender</th>
	<td>
	<?php
	echo "<select style='width: 80%' name='gender_id' id='gender_id'>";
	while ($row = mysqli_fetch_array($gender)) {
	    echo "<option value='" .$row['id']."'>" .$row['gender_name'] . "</option>";
	}
	echo "</select>";
	?>
</td>
</tr>
<tr><td style="padding-left: 50%" ><input type="submit" class="submit" value="Save"></td></tr>

</table>
</form>
</div>

<?php
	mysqli_close($con);
?>

</body>
</html>