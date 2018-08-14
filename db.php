<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ajax_p";

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if (!$conn) {
		die("Connection Failed". mysqli_error($conn));
	}



?>