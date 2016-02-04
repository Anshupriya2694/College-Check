<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	$server = 'localhost';
	$user = 'root';
	$dbname = 'dbmsproject';
	
	$con = mysqli_connect($server, $user, "", $dbname);
	
	if(mysqli_connect_errno()){
		echo "Failed to load database, ". mysqli_connect_error();
	}
	
	$state = $_POST['name_state'];
	$marks = $_POST['name_marks'];
	$field = $_POST['name_subject'];
		
	$query = "SELECT name FROM college where cut_off >= ".$marks." AND category_id = 1";
	$sql = mysqli_query($con,$query);
	
	while($result = mysqli_fetch_assoc($sql))
	{
		echo "{$result['name']}". "<br>";
	}
	
?>