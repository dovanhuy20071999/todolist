<?php
	$conn = new mysqli("localhost", "root", "", "dangk");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>