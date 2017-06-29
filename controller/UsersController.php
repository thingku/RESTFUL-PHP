<?php 

	require '../api/Users.php';
	require '../db/response.php';

	$requestMethod = $_SERVER['REQUEST_METHOD'];
	$Users = new Users();

	$response['status'] = 404;
	$response['data'] = NULL;
	
	switch ( $requestMethod ) {
		case 'POST' :
			$action = $_POST['action'];
			if ( $action == 'getUsers' ) {
				$data = $Users->getUsers();
				$response['status'] = 200;
				$response['data'] = $data;
			} else if ( $action == 'addUser' ) {
				$status = $Users->addUser( $_POST['firstname'], $_POST['lastname'], $_POST['position'] );
				if ( $status == 1 ) {
					$response['status'] = 201;
					$response['data'] = array('success' => true);	
				} else {
					$response['status'] = 400;
					$response['data'] = array('error' => 'Something went wrong.');						
				}			
			}
			break;
		case 'GET' :
			$action = $_GET['action'];
			$userID = $_GET['userID'];
			if ( $action == 'getUser' ) {
				$data = $Users->getUser($userID);
				$response['status'] = 200;
				$response['data'] = $data;
			}
			break;
		case 'PUT' :
				$input = parse_str(file_get_contents('php://input'), $_PUT);
				$status = $Users->updateUser( $_PUT['userID'], $_PUT['firstname'], $_PUT['lastname'] );
				if ( $status == 1 ) {
					$response['status'] = 200;
					$response['data'] = array('success' => 'Record updated.');
				} else {
					$response['status'] = 400;
					$response['data'] = array('error' => 'Something went wrong.');
				}
			break;
		case 'DELETE' :
			$input = parse_str(file_get_contents('php://input'), $_DELETE);
			$status = $Users->deleteUser($_DELETE['id']);
			if ( $status == 1 ) {
					$response['status'] = 200;
					$response['data'] = array('success' => true);
			} else {
					$response['status'] = 400;
					$response['data'] = array('error' => true);
			}		
			break;		
	}
	deliver_response($response);
?>