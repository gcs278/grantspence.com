<html>
	<head>
		<title>GrantSpence.com</title>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!--	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
    <body>
	<div id="page">
		<div id="upper_nav">
			<div class="column">
			<div id="logo">
				<a href="/">Grant Spence</a>
			</div>          
					
			<div id="school">
			<?php                   
				echo HTML::image('img/VirginiaTech.png', 'Grant Spence');
			?>                      
			</div>                          
			</div>                                  
		</div>
		<div id="lower_nav">                    
			<div class="column">            
			<ul id="nav_list_wrap">

				<li class="nav_link">   
					<a href="/" class="
					<?php
						if ( Request::is('/') )
							echo 'active'
					?>">Home</a>
				</li>  

				<li class="nav_link">   
					<a href="/">Resume</a>
				</li>   

				<li class="nav_link">
					<a href="/">Development</a>
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

	</div>
	
<script>
$(document).ready( function () {
        var topLower = $('#lower_nav').offset().top;
        var isFixed = false;
        // parallax header
        $(window).scroll( function()
        {       
                var scroll = $(window).scrollTop(), slowScroll = scroll/3;
                if ( scroll >= 0 ) {
                        $('#upper_nav').css({ transform: "translateY(" + slowScroll + "px)" });
                        var scrollTop = $(window).scrollTop();
                        if ( scrollTop > topLower && !isFixed ) {
                                $('#lower_nav').css ( {
                                        position: 'fixed',
                                        top: 0
                                });
                                $('#content').css ( {
                                        paddingTop: '50px'
                                });
                                isFixed = true;
                        }
                        else if ( scrollTop < topLower && isFixed ) {
                                $('#lower_nav').css ( {
                                        position: 'relative',
                                        opacity: '1'
                                });
                                $('#content').css ( {
                                        paddingTop: '0px'
                                });
                                isFixed = false;
                        }
                }
        });
});
</script>

    