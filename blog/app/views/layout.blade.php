<!DOCTYPE html>
<html>

<head>
    <title>Grant Spence - Computer Engineer</title>
    <script src="js/jquery-2.1.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
    <!--	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Grant Spence Computer Engineer">
    <meta name="keywords" content="Grant Spence, Virginia Tech, Mountain Biking">
    <meta name="author" content="Grant Spence">
</head>

<body>

    <div id="page">
        <div id="upper_nav">
            <div class="col-md-9 col-centered full">
                <div class="logo">
                    <a href="/">Grant Spence</a>
                </div>

                <div id="school">
                    <?php echo HTML::image( 'img/VirginiaTech.png', 'Grant Spence'); ?>
                </div>
            </div>
        </div>
        <div id="lower_nav">
            <div class="col-md-9 col-centered full">
                <ul id="nav_list_wrap">
                    <li class="nav_link">
                        <a href="/" class="
						<?php
							if ( Request::is('/') )
								echo 'active'
						?>">Home</a>
                    </li>

                    <li class="nav_link">
                        <a href="/resume" class="
						<?php
							if ( Request::is('resume') )
								echo 'active'
						?>">Resume</a>
                    </li>

                    <li class="nav_link">
                        <a href="/development" class="
						<?php
							if ( Request::is('development') )
								echo 'active'
						?>">Development</a>
                    </li>

                    <li class="nav_link">
                        <a href="/mountbike" class="
						<?php
							if ( Request::is('mountbike') )
								echo 'active'
						?>">Mountain Biking</a>
                    </li>

                </ul>
            </div>
        </div>

        @yield('content')

        <div class="clearfooter"></div>
        <footer>
            <div class="col-md-9 col-centered full">
                <!--<div class="logo" id="logo_bottom">
					<a href="/">Grant Spence</a>
				</div> -->
                <div id="copyright">
                    Developed and Designed by Grant Spence &copy; 2014
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
<script>

$(document).ready(function() {
    var topLower = $('#lower_nav').offset().top;
    var isFixed = false;
    // parallax header
    $(window).scroll(function() {
        var scroll = $(window).scrollTop(),
            slowScroll = scroll / 3;
        if (scroll >= 0) {
            $('#upper_nav').css({
                transform: "translateY(" + slowScroll + "px)"
            });
            var scrollTop = $(window).scrollTop();
            if (scrollTop > topLower && !isFixed) {
                $('#lower_nav').css({
                    position: 'fixed',
                    top: 0
                });
                $('#content').css({
                    marginTop: '50px'
                });
                isFixed = true;
            } else if (scrollTop < topLower && isFixed) {
                $('#lower_nav').css({
                    position: 'relative',
                    opacity: '1'
                });
                $('#content').css({
                    marginTop: '0px'
                });
                isFixed = false;
            }
        }
    });

});
</script>