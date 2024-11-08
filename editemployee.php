<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getEmployeeById = getEmployeeById($pdo, $_GET['employee_id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="employee_id">Employee ID</label> 
			<input type="text" name="employee_id" value="<?php echo $getEmployeeById['employee_id']; ?>">
		</p>
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getEmployeeById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getEmployeeById['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getEmployeeById['gender']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getEmployeeById['position']; ?>">
		</p>
		<p>
			<label for="department">Department</label>
			<input type="text" name="department" value="<?php echo $getEmployeeById['department']; ?>">
		</p>
		<p>
			<label for="team">Team</label>
			<input type="text" name="team" value="<?php echo $getEmployeeById['team']; ?>"></p>
		<p>
			<label for="supervisor">Supervisor</label>
			<input type="text" name="supervisor" value="<?php echo $getEmployeeById['supervisor']; ?>">
			<input type="submit" name="editEmployeeBtn">
		</p>
	</form>
</body>
</html>