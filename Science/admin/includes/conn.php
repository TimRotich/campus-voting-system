<?php
	$conn = new mysqli('localhost', 'root', '', 'science');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>