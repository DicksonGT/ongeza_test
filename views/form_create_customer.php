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

	?>
	<div class="info" style="max-width:500px;">

		<form  method="post" action="../core_system/save_customer.php" onsubmit="return validate_all('results');">

			<table width="100%" cellpadding="10">
				<h4 class="error" id="results"></h4>
				<tr>
					<td colspan="2">
						<h1 style="text-align:center;" >Add New Customer</h1>
					</td>
				</tr>
				<tr>
					<th>First Name</th><td><input type="text" class="input" id="first_name" name="first_name" maxlength="25" ></td>
				</tr>
				<tr>
					<th>Last Name</th><td><input type="text" class="input" id="last_name" name="last_name" ></td>
				</tr>
				<tr>
					<th>Town Name</th><td><input type="text" minlength="1" class="input" id="town_name" name="town_name" required></td>
				</tr>
				<tr><th>Gender</th>
					<td>
						<?php
						echo "<select style='width: 80%' name='gender_id' id='gender_id'>";
						echo "<option value='0'>Select Gender</option>";

						while ($row = mysqli_fetch_array($gender)) {
							echo "<option value='" .$row['id']."'>" .$row['gender_name'] . "</option>";
						}
						echo "</select>";
						?>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 50%" ><input type="submit" class="submit" value="Save"></td>
				</tr>

			</table>

		</form>
	</div>

	<?php
	mysqli_close($con);
	?>


	<script>
		function validate_all(output) {
			input1 = valid_length('first_name');
			input2 = valid_length('last_name');
			input3 = valid_length('town_name');
			input4 = get_sel_index('gender_id');

			errorlist = '';
			if (! input1) {
				errorlist += 'First Name is too short<br />';
			}
			if (! input2) {
				errorlist += 'Last Name is too short<br />';
			}
			if (! input3) {
				errorlist += 'Town Name is too short<br />';
			}
			if (! input4) {
				errorlist += 'Select Gender<br />';
			}

			if (errorlist.length) {
				errorlist = 'Error(s): <br />' + errorlist;
				document.getElementById(output).innerHTML = errorlist;
				return false;
			}
			return true;
		}

		function valid_length(field) {
			length_df = document.getElementById(field).value.length;
			if (length_df < 3 ) {
				ret_len = false;
			} else {
				ret_len = true;
			}
			return ret_len;
		}

		function get_sel_index(field) {
			sel_len = document.getElementById(field).selectedIndex;
			if (sel_len === 0) {
				return false;
			}else{
				return true;
			}
		}	
	</script>
</body>
</html>