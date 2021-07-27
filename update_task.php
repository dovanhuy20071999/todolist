<?php
	require_once 'connection.php';
	
	if($_GET['task_id'] != ""){
		$task_id = $_GET['task_id'];
		
		$conn->query("UPDATE todolist SET `status` = 'Đã làm' WHERE `id` = $task_id") or die(mysqli_errno());
		header('location: index.php');
	}
?>