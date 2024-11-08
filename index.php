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
	<h3>Welcome to the team, Engineer. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="position">Position</label> <input type="text" name="position"></p>
        <p><label for="department">Department</label> <input type="text" name="department"></p>
		<p><label for="team">Team</label> <input type="text" name="team"></p>
		<p><label for="supervisor">Supervisor</label> <input type="text" name="supervisor">
			<input type="submit" name="insertNewEmployeeBtn">
		</p>
	</form>

	<a href="testGetVariable.php?employeeName=Alfie Luis Palmera & position=Programmer">Test Get Superglobal</a>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Employee ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Position</th>
	    <th>Department</th>
	    <th>Team</th>
	    <th>Supervisor</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllEmployeeRecords = seeAllEmployeeRecords($pdo); ?>
	  <?php foreach ($seeAllEmployeeRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['employee_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['department']; ?></td>
	  	<td><?php echo $row['team']; ?></td>
	  	<td><?php echo $row['supervisor']; ?></td>
        <td>
	  		<a href="editemployee.php?employee_id=<?php echo $row['employee_id'];?>">Edit</a>
	  		<a href="deleteemployee.php?employee_id=<?php echo $row['employee_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>

</body>
</html>