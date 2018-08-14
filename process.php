<?php include 'db.php'; ?>


<?php

	// Displaying Box Data **********************************

	if (isset($_POST['id'])) {

		$id = mysqli_real_escape_string($conn, $_POST['id']);

		$sql = "SELECT * FROM users where id = '$id' ";
		$result = mysqli_query($conn, $sql);

		if (!$result) {
			die("Query Failed" . mysqli_error($conn));
		}

		while ($row = mysqli_fetch_array($result)) {
		    $id = $row['id'];
		    $name = $row['name'];
		?>

			<input type="text" rel="<?php echo $id; ?>" class="form-control mb-3 name-input" value="<?php echo $name; ?>">
			<input type="button" class="btn btn-sm btn-primary update" value="Update">
			<input type="button" class="btn btn-sm btn-danger delete" value="Delete">
			<input type="button" class="btn btn-sm btn-info close-btn" value="Close">


<?php  } } ?>


<?php

	// Updating Data ********************************

	if (isset($_POST['updatethis'])) {

		$id   = mysqli_real_escape_string($conn, $_POST['id']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);

		$sql = "UPDATE users SET name = '$name' WHERE id = $id ";
		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query Failed!" . mysqli_error($conn));
		}

	}


	// Deleting Data ********************************

	if (isset($_POST['deletethis'])) {

		$id   = mysqli_real_escape_string($conn, $_POST['id']);

		$sql = "DELETE FROM users WHERE id = $id ";
		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die("Query Failed!" . mysqli_error($conn));
		}

	}

?>



<script>

	$(document).ready(function(){
		var id;
		var name;
		var updatethis = "update";
		var deletethis = "delete";

		// Extract id and name
		$(".name-input").on("input", function() {

			id = $(this).attr("rel");
			name = $(this).val();
			//alert(name);

		});


		// Update Button Function
		$(".update").on('click', function() {

			$.post("process.php", {id: id, name: name, updatethis: updatethis}, function(data) {
				$("#feedback").html("<p class='alert alert-success alert-dismissible fade show form-control pt-1' role='alert'>Record Updated Successfully!<button type='button' class='close pt-1' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></p>");
			});


		}); // Update Button Function End


		// Delete Button Function

		$(".delete").on('click', function() {

			if (confirm("Are You Sure to Delete?")) {

				id = $(".name-input").attr("rel");

				$.post("process.php", {id: id, deletethis: deletethis}, function(data) {

					$("#action-container").hide();

				});

			}else{

				$("#action-container").hide();
			}




		}); // Update Button Function End


		// Close Button Function

		$(".close-btn").on('click', function() {


				$("#action-container").hide();


		}); // Close Button Function End




	}); // Document Ready Function End


</script>

















