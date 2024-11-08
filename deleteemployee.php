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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getEmployeeById = getEmployeeById($pdo, $_GET['employee_id']); ?>
	<form action="core/handleForms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">

		<div class="employeeContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getEmployeeById['first_name']; ?></p>
			<p>Last Name: <?php echo $getEmployeeById['last_name']; ?></p>
			<p>Gender: <?php echo $getEmployeeById['gender']; ?></p>
			<p>Position: <?php echo $getEmployeeById['position']; ?></p>
			<p>Department: <?php echo $getEmployeeById['department']; ?></p>
			<p>Team: <?php echo $getEmployeeById['team']; ?></p>
			<p>Supervisor: <?php echo $getEmployeeById['supervisor']; ?></p>
			<input type="submit" name="deleteEmployeeBtn" value="Delete">
		</div>
	</form>
</body>
</html>