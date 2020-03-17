<!DOCTYPE html>
<html>
<head>
 <title> Ongeza Update Customer </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
	include("../core_system/database_conn.php");
	$customer = mysqli_query($con,"SELECT * FROM customers WHERE id = ".$_GET['id']." limit 1");
	$getRowAssoc = mysqli_fetch_assoc($customer);
	
?>
<div class="info" style="max-width:500px;">
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Update Customer</h1></td></tr>
<form action="../core_system/save_customer.php" method="post">
<tr><th>First Name</th><td><input type="text" class="input" name="first_name" value="<?php echo$getRowAssoc['first_name'] ?>" required ></td></tr>
<tr><th>Last Name</th><td><input type="text" class="input" name="last_name" value="<?php echo $getRowAssoc['last_name'] ?>" required></td></tr>
<tr><th>Town Name</th><td><input type="text" class="input" name="town_name" value="<?php echo $getRowAssoc['town_name'] ?>" required></td></tr>
<tr><th>Gender</th><td><input type="text" class="input" name="gender_id" value="<?php echo $getRowAssoc['gender_id'] ?>" required></td></tr>
<tr><td ><input name="id" type="hidden" class="input" value="<?php echo $getRowAssoc['id'] ?>"></td></tr>
<tr><td style="padding-left: 50%" ><input type="submit" class="submit" value="Save"></td></tr>
</form>
</table>
</div>
</body>
</html>