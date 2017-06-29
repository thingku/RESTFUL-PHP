<!DOCTYPE html>
<html>
<head>
	<title>PHP Rest API | Add</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid">
		<form id="addForm">
			<fieldset>
				<h3>Add User</h3>
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
				<label>Position: </label>
				<select name="position" required>
					<option value="1">CEO</option>
					<option value="2">President</option>
					<option value="3">Vice-President</option>
					<option value="4">Rank and File</option>
				</select>
			</fieldset>				
			<fieldset>
			<input type="hidden" name="action" value="addUser" />
				<button class="btn btn-primary" id="addUser" >Add User</button>
			</fieldset>		
		</form>
	</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		addUser();
	});
</script>
</html>