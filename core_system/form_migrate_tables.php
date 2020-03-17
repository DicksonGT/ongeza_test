<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Ongeza Test</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css" />
	<link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="info" style="max-width:50%;">
		<div class="success"> <?php echo $_SESSION['msg']; ?> </div>
		<table width="100%" cellpadding="10">
			<tr><td colspan="2">
				<h1 style="text-align:center;" >Create Tables</h1>
			</td></tr>
			<form action="migrate_tables.php" method="post">

				<tr><td style="padding-left: 40%"><input type="submit" class="submit" value="Create Table(s)"></td></tr>
			</form>
		</table>
	</div>
</body>
</html>