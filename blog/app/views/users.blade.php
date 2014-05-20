@extends('layout')

@section('content')

<div id="page">
	<div id="upper_nav">
		<div class="column">
		<div id="logo">
			Grant Spence
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
				<a href="/">Resume</a>
			</li>
			
			<li class="nav_link">
				<a href="/">Mountain Biking</a>
			</li>
		
			<li class="nav_link">
				<a href="/">Development</a>
			</li>
			
			<li class="nav_link">
				<a href="/">Surfing</a>
			</li>
			

		</ul>
		</div>
	</div>
	<div id="content">
		<div class="column">

			<div id="container_left">
				<?php
				echo HTML::image('img/my_pic_crop.png', 'Grant Spence');
				?>
				<div id="links">
					<h1 class="code">+</h1>
					<h3>LINKS</h3>
					<ul>
						<li>
							<a href="http://www.linkedin.com/pub/grant-spence/63/7a5/157/" target="_blank">LinkedIn</a>
						</li>
						<li>
							
						</li>
					</ul>
				</div>
				
			</div>
			<div id="container_right">
				<div class="h_left">
					<h1 class="code">[</h1>
					<h2>WELCOME</h2>
					<h1 class="code">]</h1>
				</div>

				<div class="p_left">
					<p>Welcome to the most pretigous site on the internet. GrantSpence.com is the premier spot for seeing what's up.</p>
				</div>

				<div class="h_left">
					<h1 class="code">[</h1>
					<h2>MY LIFE</h2>
					<h1 class="code">]</h1>
				</div>

				<div class="p_left">
					<p>I attempt to live a interesting, fulfilling life that never lets me get bored. Mountain biking, surfing, and coding has my life booked full.</p>
				</div>

			</div>
		</div>

	</div>

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


	$(window).scroll(function() {
    if (  document.documentElement.clientHeight + 
          $(document).scrollTop() >= document.body.offsetHeight )
    {
//	$("#black_box").animate({'marginTop': '-=30px'}, 'fast'); 
    }
});
});
</script>

@stop
