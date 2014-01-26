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
			$WshShell = new COM("WScript.Shell");
			$oExec = $WshShell->Run("C:\\wamp\\www\\mailsend1.17b14.exe -to gcs278@vt.edu -from grantspence.com@gmail.com -ssl -port 465 -auth -smtp smtp.gmail.com -sub \""
				. $name . " posted [granspence.com]\" -M \"" . $name .
				" with email address " . $email . " has posted on grantspence.com.\nThe message: " . $message .
				"\" +cc +bc -v -user grantspence.com@gmail.com -pass \"AuXwqLre9xp4AcjhWkGSRsfc\"");
		}

	}
?>