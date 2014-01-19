<?php 
	require_once '../meekrodb.2.2.class.php';
	DB::query("SELECT * FROM guestbook");
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		$name = $_POST['name'];
		$email =  $_POST['email'];
		$message = $_POST['message'];

		if (isset( $name, $email, $message )) {
			DB::insert('guestbook', array(
			  'name' => $name,
			  'email' => $email,
			  'message' => $message
			));
			echo json_encode(true);
		}

	}
?>