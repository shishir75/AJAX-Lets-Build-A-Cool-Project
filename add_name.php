<?php include 'db.php'; ?>


<?php

	if (isset($_POST['name'])) {
		$name = $_POST['name'];

		$sql = "INSERT INTO users(name) VALUES('$name')";
		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query Failed!" . mysqli_error($conn));
		}

	}


?>