function getUsers() {
	$.ajax({
		method : 'POST',
		url : 'controller/UsersController.php',
		data : { action : 'getUsers' },
		dataType : 'json',
		success : function( data ) {
			var context = {};
			context.users = data;			
			var source = $('#usersTemplate').html();
			var template = Handlebars.compile(source);
			Handlebars.registerHelper( 'fullName', function(firstname, lastname) {
				return firstname + ' ' + lastname;
			});
			Handlebars.registerHelper('link', function(id) {
			  return id;
			});			
			var domHTML = template(context);
			$('#usersList').html(domHTML);
			deleteUser();
		}
	});
}
function viewUpdateUser(userID) {
	$.ajax({
		method : 'GET',
		url : 'controller/UsersController.php',
		data : { action : 'getUser', userID : userID },
		dataType : 'json',
		success : function( data ) {
			$('input[name="firstname"]').val(data.firstname);
			$('input[name="lastname"]').val(data.lastname);
			$('input[name="userID"]').val(data.id);
		}		
	});
	$('#updateUser').click( function(e) {
		e.preventDefault();
		var data = $('#editForm').serialize();
		$.ajax({
			method : 'PUT',
			url : 'controller/UsersController.php',
			data : { firstname : $('input[name="firstname"]').val(), lastname : $('input[name="lastname"]').val(), userID : $('input[name="userID"]').val() },
			dataType: 'json',
			success : function (data) {
				console.log(data);
			}
		});
	} );
}
function addUser() {
	$('#addUser').click( function(e) {
		e.preventDefault();
		var data = $('#addForm').serialize();
		$.ajax({
			method : 'POST',
			data : data,
			url : 'controller/UsersController.php',
			dataType : 'json',
			success : function(data) {
				if ( data.success === true ) {
					window.location.replace("index.php");
				}
				console.log(data);
			}
		});
	} );
}
function deleteUser() {
	$('.deleteBtn').each( function() {
		$(this).click( function() {
			var userID = $(this).attr('id');
			$.ajax({
				method : 'DELETE',
				url : 'controller/UsersController.php',
				data : { id : userID },
				dataType: 'json',
				success : function(data) {
					if ( data.success === true ) {
						location.reload();
					}
				}
			});
		} );
	} );
}