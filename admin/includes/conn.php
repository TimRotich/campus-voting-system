<?php
	$conn = new mysqli('localhost', 'root', '', 'cvs');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>