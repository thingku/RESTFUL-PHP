<?php 
 	header('Access-Control-Allow-Origin: *'); 
	require '../model/Users.php';
	require 'response.php';
	$app->get('/api/users', function ($req, $res, $args) {
		$Users = new Users();		
		$users = $Users->getUsers();
		$response['status'] = 200;
		echo json_encode($users);	
	});
