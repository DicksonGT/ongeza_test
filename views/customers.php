<!DOCTYPE html>
<html>
<?php
	session_start();
	if (isset($_SESSION['msg1'])) {
		echo $_SESSION['msg1'];
	}
	if (isset($_SESSION['msg2'])) {
		echo "<br>". $_SESSION['msg2'];
	}
?>
<head>
 <title> Ongeza Customers</title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include("../core_system/database_conn.php");
?>
<div class="info" style="max-width:80%;">
<table width="100%" cellpadding="10" border="1">
<tr><td colspan="6"><h1 style="text-align:center;" >List Of Customers</h1>
		<p style="text-align: right; padding-right: 12px">
			<a href="">	<strong>Add New Customer</strong></a>
		</p>
	</td>
</tr>
	<tr>
		<th>ID</th> 
		<th>First Name</th>
		<th>Last Name</th>
		<th>Town Name</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>
	<?php
		$result1 = mysqli_query($con,"SELECT * FROM customers");
			while($row1 = mysqli_fetch_array($result1))
			  {
				echo "<tr>
				<td>".$row1['id']."</td>
				<td>".$row1['first_name']."</td>
				<td>".$row1['last_name']."</td>
				<td>".$row1['town_name']."</td>
				<td>".$row1['gender']."</td>
				<td>Edit | Delete</td>
				</tr>";
			  }
	?>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>