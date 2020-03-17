<!DOCTYPE html>
<html>
<head>
 <title> Ongeza DB Connect</title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="info" style="max-width:50%;">
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Create New Database</h1></td></tr>
<form action="create_db.php" method="post">
<tr><th>New DB Name</th><td><input type="text" class="input" name="db_name" value="ongeza_test" required></td></tr>
<tr><th>MySQL Username</th><td><input type="text" class="input" name="uname" value="root" required></td></tr>
<tr><th>Password</th><td><input type="password" class="input" name="pwd" required></td></tr>

<tr><td><input type="submit" class="submit" value="Create"></td></tr>
</form>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>