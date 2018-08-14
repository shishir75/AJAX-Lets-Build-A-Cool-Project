<?php include 'db.php'; ?>


<?php

	$sql = "SELECT * FROM users ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);

	if (!$result) {
		die("Query Failed" . mysqli_error($conn));
	}

	while ($row = mysqli_fetch_array($result)) {
	    $id = $row['id'];
	    $name = $row['name'];
	?>

		<tr>
			<td class="name-id"><?php echo $id; ?></td>
			<td><a rel="<?php echo $id; ?>" class='name-link' href="javascript:void(0)"><?php echo $name; ?></a></td>
		</tr>


	<?php  } ?>



	<script type="text/javascript">
		$(document).ready(function(){
			//$("#action-container").hide();

			$(".name-link").on('click', function(){
				$("#action-container").show();
				var id =	$(this).attr('rel');
				//alert(id);
				$.post("process.php", {id: id}, function(data){
					//alert(data);

					$("#action-container").html(data);


				})

			});
		});

	</script>

