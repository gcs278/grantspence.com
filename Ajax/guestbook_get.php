<?php 
	require_once '../meekrodb.2.2.class.php';
	DB::query("SELECT * FROM guestbook");
	if(isset($_GET['range'])) {
		$range = intval($_GET['range']);
		$range = $range * 5;
		$query = "SELECT * FROM guestbook WHERE verified ORDER BY timestamp desc LIMIT 5 OFFSET $range";
		$results = DB::query($query);

		$displayPosts = array();
		foreach ($results as $post) {
			$date = date('g:i M j', strtotime($post['timestamp']));
			array_push($displayPosts, array( 'name' => $post['name'],
				'date' => $date,
				'message' => $post['message']));
		}
		
		echo json_encode($displayPosts);
	}
?>