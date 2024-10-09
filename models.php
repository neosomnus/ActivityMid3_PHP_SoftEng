<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoStudentRecords($pdo,$first_name, $last_name, $gender, $position, $department, $team, $supervisor) {

	$sql = "INSERT INTO employee_records (first_name,last_name,gender,position,department,team,supervisor) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $position, 
		$department, $team, $supervisor]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllStudentRecords($pdo) {
	$sql = "SELECT * FROM student_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

?>