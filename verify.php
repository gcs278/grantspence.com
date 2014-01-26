<?php
	require_once 'meekrodb.2.2.class.php';
DB::$throw_exception_on_error = true;
DB::$throw_exception_on_nonsql_error = true;
	if ( isset($_GET['id'], $_GET['verify']) ) {
		$verify = $_GET['verify'];
		$id = $_GET['id'];
		if ( $verify == 0 ) {
			DB::query("DELETE FROM guestbook WHERE idguestbook = $id");
			echo "<h2>Post with id of $id was DELETED from the database</h2>";
		} else if ( $verify == 1 ){
			echo DB::update('guestbook', array('verified' => 1), "idguestbook=%s", $id);
			echo "<h2>Post with id of $id was VERIFIED</h2>";
		}
	}
?>
<!doctype html>
<head>
<meta charset="utf-8">

<title>Grant Spence &mdash; Computer Engineer</title>

<!-- CSS
================================================================================================= -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/themes/type_10.css">
<link rel="stylesheet" href="css/themes/color_05.css">

<!-- JS
================================================================================================= -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/jquery-1.8.3.min.js"></script>
<script src="js/libs/jquery.easing.1.3.min.js"></script>
<script src="js/libs/jquery.fitvids.js"></script>
<script src="js/script.js"></script>

</head>
<body>




</body>

</html>