<!DOCTYPE html>
<html>
<head>
 <title> Ongeza New Customer </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="info" style="max-width:500px;">
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Add New Customer</h1></td></tr>
<form action="../core_system/save_customer.php" method="post">
<tr><th>First Name</th><td><input type="text" class="input" name="first_name" required></td></tr>
<tr><th>Last Name</th><td><input type="text" class="input" name="last_name" required></td></tr>
<tr><th>Town Name</th><td><input type="text" class="input" name="town_name" required></td></tr>
<tr><th>Gender</th><td><input type="text" class="input" name="gender_id" required></td></tr>
<tr><td style="padding-left: 50%" ><input type="submit" class="submit" value="Save"></td></tr>
</form>
</table>
</div>
</body>
</html>