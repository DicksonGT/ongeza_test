<!DOCTYPE html>
<html>
<head>
 <title> Ongeza Gender </title>
 <link href="../css/main.css" rel="stylesheet" type="text/css" />
 <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="info" style="max-width:500px;">
	<div class="success"> 
		<?php 
			session_start();
			if (isset($_SESSION['msg1'])) {
				echo $_SESSION['msg1'];
			}
			if (isset($_SESSION['msg2'])) {
				echo "<br>". $_SESSION['msg2'];
			}

			unset($_SESSION['msg1']);
			unset($_SESSION['msg2']);
		?>
	</div>
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Add Gender</h1></td></tr>
<form action="../core_system/save_gender.php" method="post">
<tr><th>Gender Name</th><td><input type="text" class="input" name="gender_name" required></td></tr>
<tr><td style="padding-left: 50%" ><input type="submit" class="submit" value="Save"></td></tr>
</form>
</table>
</div>
</body>
</html>