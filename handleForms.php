<<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$position = trim($_POST['position']);
	$department = trim($_POST['department']);
	$team = trim($_POST['team']);
	$supervisor = trim($_POST['supervisor']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($position) && !empty($department)  && !empty($team) && !empty($supervisor)) {
			$query = insertIntoStudentRecords($pdo, $firstName, $lastName, 
			$gender, $position, $department, $team, $supervisor);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}

?>