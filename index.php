<!DOCTYPE html>
<html>
<head>
	<title>PHP Rest API</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid">
		<a href="addUser.php" class="btn btn-success">Add New</a>
		<table class="table">
			<thead>
				<tr>
					<th>Fullname</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="usersList">
			</tbody>
		</table>		
	</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		getUsers();
	});
</script>
</html>