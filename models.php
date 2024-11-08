<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoEmployeeRecords($pdo,$first_name, $last_name, $gender, $position, $department, $team, $supervisor) {

	$sql = "INSERT INTO employee_records (first_name,last_name,gender,position,department,team,supervisor) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $position, 
		$department, $team, $supervisor]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllEmployeeRecords($pdo) {
	$sql = "SELECT * FROM employee_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getEmployeeByID($pdo, $employee_id) {
	$sql = "SELECT * FROM employee_records WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$employee_id])) {
		return $stmt->fetch();
	}
}

function updateAEmployee($pdo, $employee_id, $first_name, $last_name, 
	$gender, $position, $department, $team, $supervisor) {

	$sql = "UPDATE employee_records 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					position = ?, 
					department = ?, 
					team = ?, 
					supervisor = ? 
			WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, 
		$position, $department, $team, $supervisor, $employee_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteAEmployee($pdo, $employee_id) {

	$sql = "DELETE FROM employee_records WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$employee_id]);

	if ($executeQuery) {
		return true;
	}

}

?>