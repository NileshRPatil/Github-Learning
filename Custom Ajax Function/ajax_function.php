<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="toastr.min.css">
		
	  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	  <script type="text/javascript" src="toastr.min.js"></script>
	  <script type="text/javascript" src="ajaxcall.js"></script>
	  
	</head>
	<body>
	  
		<form method="POST" id="form1" action="#" >
			<input type="text" name="name">	
			<input type="submit" name="submit" id="submit1" value="Submit" >
		</form>

		<br><br>

		<form method="POST" enctype="mutlipart/formdata" id="form2" action="#">
			<input type="text" name="name">
			<input type="file" name="image">	
			<input type="submit" name="submit" id="submit2" value="Submit" >
		</form>



	<script>
	  $(document).ready(function(){

	  	
		function successUserCreateHandler(response) {
			console.log(response);
		    if (response.status == 1) {
		        Common.ShowSuccessSavedMessage('Details saved successfully.');
		    } else if (response.status == 2) {
		        Common.ShowSuccessUpdateMessage('Details updated successfully.');
		    } else if (response.status == 3) {
		        Common.ShowSuccessDeleteMessage('Details deleted successfully.');
		    } else {
		    	Common.DisplayError('Error while saving');
		    }
		    return false;
		}

		$("#submit1").click(function(e){

			e.preventDefault();

			var formData = $("#form1").serialize();

			Common.Ajax('POST', 'submit.php', formData, 'json', successUserCreateHandler);
		});

		$("#submit2").click(function(e){

			e.preventDefault();

			var formData = new FormData($("#form2")[0]);

			Common.Ajax('POST', 'submit.php', formData, 'json', successUserCreateHandler, 'file');
		});
	
	  });
	</script>

	</body>
	</html>