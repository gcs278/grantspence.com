<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">

<!--
••••••••••••••••••••••••

Powered by Type & Grids™
www.typeandgrids.c

••••••••••••••••••••••••
-->

<title>Grant Spence &mdash; Computer Engineer</title>
<meta name="description" content="The portfolio of designer Ivan Designostrom">
<meta name="author" content="Ivan Designostrom">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================================================================= -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/themes/type_10.css">
<link rel="stylesheet" href="css/themes/color_05.css">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons
================================================================================================= -->
<link rel="shortcut icon" href="images/favicons/favicon.ico">
<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

<!-- JS
================================================================================================= -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/jquery-1.8.3.min.js"></script>
<script src="js/libs/jquery.easing.1.3.min.js"></script>
<script src="js/libs/jquery.fitvids.js"></script>
<script src="js/script.js"></script>

</head>
<body>
<?php
// 	$name = "name";
// 	$email = "email";
// 	$message = "message alsdfjlksjadf;lksajdf;lk";
// echo "C:\\wamp\\www\\mailsend1.17b14.exe -to gcs278@vt.edu -from grantspence.com@gmail.com -ssl -port 465 -auth -smtp smtp.gmail.com -sub \""
// 				. $name . " posted [granspence.com]\" -M \"" . $name .
// 				" with email address " . $email . " has posted on grantspence.com.\n The time is %date% %time%.\nThe message: " . $message ."\" +cc +bc -v -user grantspence.com@gmail.com -pass \"Aufc\"";
?>
<!-- Write preloader to page - this allows the site to load for users with JS disabled -->
<script type="text/javascript">
	document.write("<div id='sitePreloader'><div id='preloaderImage'><img src='images/site_preloader.gif' alt='Preloader' /></div></div>");
</script>

<div class="container">
	
	<!-- Header begins ========================================================================== -->
	<header class="sixteen columns">
		<div id="logo">
			<h1>Grant Spence</h1>
			<h2>Computer Engineer</h2>
			<div id="logoVT">
				<h3>Virginia Polytechnic Institute and State University&nbsp<img src="images/projects/VT_2.png" alt="VT Logo"/></h3> 
				
			</div>
		</div>
		<nav>
			<h3>GSPENCE</h3>
			<ul>
				<!-- <li><button id="aboutPage">About</button></li> -->
<!-- 				<li><button id="workPage">Work</button></li> -->
				<!--<li><a href="http://wordpress.org" target="_blank">Blog</a></li>-->
			</ul>
		</nav>
		<hr />
	</header>
	<!-- Header ends ============================================================================ -->
	
	<!-- About page begins ====================================================================== -->
	<div id="about">

				<!-- Column 2 begins ==================================================================== -->
		<div class="five columns">
			
			<img src="images/my_pic_crop.png" alt="About" />
			
			<ul class="linedList">
				<li><strong>Location:</strong> Blacksburg, Virginia</li>
				<li><strong>Email:</strong> <a href="mailto:gcs278@vt.edu">gcs278@vt.edu</a></li>
				<li><strong>R&eacute;sum&eacute;:</strong> <a href="resume.pdf">resume.pdf</a></li>
				<li><strong>LinkedIn:</strong> <a href="http://www.linkedin.com/pub/grant-spence/63/7a5/157/" target="_blank">www.linkedin.com/pub/grant-spence/63/7a5/157/</a></li>
			</ul>
			<div id="posts"><a id="guestbook_link">Sign it!</a>
				<h3>Guestbook Posts</h3>

				<!-- This is where jQuery will put the data -->
				<div class='more_posts'><p><a>Show More</a></p></div>
			</div>
		</div>
		<!-- Column 2 ends ====================================================================== -->
		
		<!-- Column 1 begins ==================================================================== -->
		<div class="ten columns offset-by-one">
			
			<div id="guestbook">
				<h3>Guestbook</h3>
					<p>Submit your information for verification. Once I verify your post, it will show in the Guestbook.</p>
					<div class="five columns" id="nameBlock">
						Display Name: <input type="text" name="name" id="name" maxlength="22">
						<div class="error">
							Must have display name
						</div>
					</div>
					<div class="four columns" id="emailBlock">
						Email: <input type="text" name="email" id="email" maxlength="124">
						<div class="error">
							Must have an valid email address
						</div>
					</div>
					<div class="nine columns">
	
					</div>
					<div class="nine columns" id="messageBlock">
						Message: <textarea type="text" name="message" id="message" maxlength="2000"></textarea>

						<button id="submit" onclick=" guestbookSubmit()">Submit</button>
						<div class="spinner">
					      <div class="double-bounce1"></div>
					      <div class="double-bounce2"></div>
					    </div>
					    <img src='images/check.svg' width='30px' height='30px'>
						<div class="error">
							Must have a message
						</div>
					</div>

			</div>
			<h3>About Myself</h3>
			<p>
			I am motivated and dedicated student that has developed a great passion for my major. My objective in life is to never stop learning about technology and eventually contribute to develop new technologies. On the job and in college I have fun learning about how things work. It fills me with a sense of excitement and passion.
			</p>
			<div id="education">
			<h3>Education</h3>
				<h4>Virginia Tech - Bachelor of Science, Computer Engineering (CPE)</h4>
				<p>
					Minor: Computer Science
				</p>
				<p>
					Current GPA: 3.79 / 4.0
				</p>
				<p>
					In Major GPA: 3.84 / 4.0
				</p>
				<p>
					Member of University Honors: Fall 2012 - Spring 2014
				</p>
			</div>
			
			<h3>Skills</h3>
			<h4>Network Engineering</h4>
			<p>
				Professional experience in enterprise system and networking:
				<ul class="disc">
					<li>Over a year of experience in an Department of Defense enterprise data center</li>
					<li>Developed knowledge of enterprise systems and networking</li>
					<li>Cisco, Juniper, Extreme IOS</li>
					<li>Powershell / Bash Scripting</li>
					<li>Switching</li>
					<li>Systems Monitoring</li>
					<li>Network security analysis and response</li>
				</ul>
			</p>
			
			<h4>Software Engineering</h4>
			<p>
				Advanced knowledge of the following languages:
				<ul class="disc">
					<li>Java</li>
					<li>Embedded C, C++, C#</li>
					<li>Python</li>
					<li>PHP</li>
					<li>HTML5, CSS</li>
				</ul>
				Experience with the following development environments and frameworks:
				<ul class="disc">
					<li>Visual C++</li>
					<li>QT</li>
					<li>Yii</li>
					<li>Kohana</li>
					<li>Android Application Development</li>
					<li>Jetty Server</li>
					<li>Google Apps Engine</li>
				</ul>
			</p>
			
		</div>
		<!-- Column 1 ends ====================================================================== -->
		

		
	</div>
	<!-- About page ends ======================================================================== -->
	
	<!-- Footer begins ========================================================================== -->
	<footer class="sixteen columns">
		<hr />
		<ul id="footerLinks">
			<li>&copy; 2013 Ivan Designostrom. All rights reserved.</li>
			<li><a href="mailto:hello@ivandesignostrom.com">hello@ivandesignostrom.com</a></li>
			<li><a href="http://www.twitter.com" target="_blank">Twitter</a></li>
			<!--Notice: The "Powered by Type & Grids" link in the footer is required in the Free version. Upgrade to the Pro version if you would like to remove it. (www.typeandgrids.com/pirates) -->
			<li>Powered by <a href="http://www.typeandgrids.com" target="_blank">Type &amp; Grids</a></li>
		</ul>
	</footer>
	<!-- Footer ends ============================================================================ -->
</div><!-- container -->
</body>

<script>
range = 0;
 $(window).ready(function() {
 	$('#guestbook').hide();
 	$('.spinner').hide();
 	$('#guestbook').find('img').hide();

 	$("#guestbook_link").click(function() {
 		var guestBook = $("#guestbook");

 		guestBook.slideToggle("fast");
 		event.preventDefault();
 	});

 	getGuestBook(range);
 	range += 1;

 	$('.more_posts').click(function() {
 		getGuestBook(range);
 		range += 1;
	});


 });
 	function getGuestBook(range) {
 		$.getJSON("Ajax/guestbook_get.php?range="+range, function( data ) {
 			display = "";
 			i = 0;
 			$.each(data, function (index, value) {
 				display += formatPost(value.name, value.date, value.message);
 				i=index;
 			});

 			if ( display == "" || i < 4) {
 				$('.more_posts').hide();
 			}

 			if ( range == 0 )
 				$("#posts").find('h3').after(display);
 			else
 				$("#posts").find('.post').last().after(display);
 		});
 	}

 	function formatPost(name, date, message) {
		display = "<div class='post'>" + 
			"<p class='head'>By <strong>" + name + "</strong><span>" +
			date +"</span></p>" + 
			"<p class='message'><em>" + message + "</em></p></div>";
		return display;
 	}

	function guestbookSubmit()  {
		
		// $('#guestbook').find('button').prop('disabled',false);
		var name = $('#guestbook').find('#name').val();
		var email = $('#guestbook').find('#email').val();
		var message = $('#guestbook').find('#message').val();

		var error = false;

		if ( !name ) {
		 	$('#nameBlock').find('.error').slideDown('fast');
		 	error = true;
		} else {
			$('#nameBlock').find('.error').slideUp('fast');
		}
		if ( !email  || !IsEmail(email) ) {
			$('#emailBlock').find('.error').slideDown('fast');
		 	error = true;
		} else {
			$('#emailBlock').find('.error').slideUp('fast');
		}
		if ( !message ) {
			$('#messageBlock').find('.error').slideDown('fast');
		 	error = true;
		} else {
			$('#messageBlock').find('.error').slideUp('fast');
		}
		if ( error ) {
			return;
		}
		//$('#guestbook').find('button').hide();
		//$('.spinner').fadeIn('fast');
		
		$.post("Ajax/guestbook.php", {
			name: name,
			email: email,
			message: message
		},
		function( data ) {
		  $( ".result" ).html( data );
		  if ( data == 'true' ) {
			$('#guestbook').find('button').hide();
			$('#guestbook').find('img').fadeIn('fast');
			$('#guestbook').find('#name').attr('disabled','disabled');
			$('#guestbook').find('#email').attr('disabled','disabled');
			$('#guestbook').find('#message').attr('disabled','disabled');
			//$('#posts').find('h3').after(formatPost(name, "<?php echo date('g:i M j', time() - 10800)?>", message));
		  }

		  //$('.spinner').fadeOut('fast');
		  //$('#guestbook').find('button').fadeIn('fast');
	});

	function IsEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}
}
</script>

</html>
