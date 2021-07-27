<?php
	require_once 'connection.php';
	if(ISSET($_POST['submit'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$conn->query("INSERT INTO todolist (task) VALUES('$task')");
			header('location:index.php');
		}
	}
?>