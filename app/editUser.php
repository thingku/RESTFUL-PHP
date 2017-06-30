<?php 
	$userID = $_GET['userID'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Rest API | Edit</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid">
		<form id="editForm">
			<fieldset>
				<h3>Edit User</h3>
			</fieldset>	
			<fieldset >
				<label>Firstname: </label>
				<input type="text" name="firstname" required />
			</fieldset>	
			<fieldset>
				<label>Lastname: </label>
				<input type="text" name="lastname" required />
			</fieldset>	
			<fieldset>
				<input type="hidden" name="userID" value="" >
				<button class="btn btn-primary" id="updateUser" >Save Changes</button>
			</fieldset>		
		</form>
	</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		viewUpdateUser('<?php echo $userID; ?>');
	});
</script>
</html>