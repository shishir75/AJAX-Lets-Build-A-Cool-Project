$(document).ready(function(){

	// Display the result instantly
	setInterval(function(){
		updateNames();

	},500); // setInterval method end




	// Display Data
	function updateNames() {
		$.ajax({
			url: "display_names.php",
			type: "POST",
			success: function(show_names){
				if (!show_names.error) {
					$("#show-names").html(show_names);
				}
			}
		}); // Display Data End
	} // UpdateNames Method End


	// ajax search mechanism start

	$("#search").keyup(function(){

		var search = $("#search").val();

		$.ajax({

			url: 'search.php',
			data: {search:search},
			type: 'POST',
			success: function(data){
				if (!data.error) {
					$("#result").html(data);
				}
			}


		}); // ajax method end

	}); // ajax search mechanism end



	// This code add name to database table users start

	$("#add-name-form").submit(function(evt) {

		evt.preventDefault();

		var postData = $(this).serialize();
		var url = $(this).attr('action');

		//alert(url);

		$.post(url, postData, function(php_table_data){

			$("#name-result").html(php_table_data);
			$("#add-name-form")[0].reset(); // to reset the name input field

		}); // post method end


	}); // This code add name to database table users end









}); // Document ready function end