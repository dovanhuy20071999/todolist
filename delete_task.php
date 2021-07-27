<?php
	require_once 'connection.php';
	
	if($_GET['task_id']){
		$task_id = $_GET['task_id'];
		
		$conn->query("DELETE FROM todolist WHERE `id` = $task_id") or die(mysqli_errno());
		header("location: index.php");
	}	
?>