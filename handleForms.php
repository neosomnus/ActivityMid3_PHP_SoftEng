<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewEmployeeBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$position = trim($_POST['position']);
	$department = trim($_POST['department']);
	$team = trim($_POST['team']);
	$supervisor = trim($_POST['supervisor']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($position) && !empty($department)  && !empty($team) && !empty($supervisor)) {
			$query = insertIntoEmployeeRecords($pdo, $firstName, $lastName, 
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

if (isset($_POST['editEmployeeBtn'])) {
	$employee_id = trim($_POST['employee_id']);
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$position = trim($_POST['position']);
	$department = trim($_POST['department']);
	$team = trim($_POST['team']);
	$supervisor = trim($_POST['supervisor']);

	if (!empty($employee_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($position) && !empty($department) && !empty($team) && !empty($supervisor)) {

		$query = updateAEmployee($pdo, $employee_id, $firstName, $lastName, $gender, $position, $department, $team, $supervisor);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}

if (isset($_POST['deleteEmployeeBtn'])) {

	$query = deleteAEmployee($pdo, $_GET['employee_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}

?>