@extends('layout')

@section('content')
<div id="content">
	<!-- <div class="row"> -->
        <div class="col-md-9 col-centered">

                <div id="container_left" class="col-sm-3 hidden-xs">
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
         <div id="container_right" class="col-sm-9">
			<div class="h_left">
				<!-- <h1 class="code">[</h1> -->
				<h2>WELCOME</h2>
				<hr>
				<!-- <h1 class="code">]</h1> -->
			</div>

			<div class="p_left">
				Welcome to GrantSpence.com - an experimental website developed and designed by yours truly, Grant Spence. 
				I am a Computer Engineering student at Virginia Tech and this website is a developmental ground for myself to push ideas and display them for the world to see.
			</div>

			<div class="h_left">
				<!-- <h1 class="code">[</h1> -->
				<h2>UNDER CONSTRUCTION</h2>
				<hr>
				<!-- <h1 class="code">]</h1> -->
			</div>

			<div class="p_left">
				GrantSpence.com is currently in development. Feel free to check out the Resume, Development, and Mountain Biking sections.<br><br>
				<?php
				echo HTML::image('img/menworking.png','Men Working',array('class'=>'menworking'));
				?>
				<div style="text-align:center;">
				<br>
				<strong>Please come back to see the progress!</strong>
				</div>
			<!--	<div class="row plus">
					<h3 class="code">+</h3>
					<h3 style="display:inline">Check out the resume section</h3>
					<?php
                                                //echo HTML::image('img/my_pic_crop.png', 'Grant Spence');
                                        ?>
				</div>

				<div class="row plus">
					<?php
						//echo HTML::image('img/my_pic_crop.png', 'Grant Spence');
					?>

					<h3 class="code">+</h3>
					<h3 style="display:inline">See what I've been developing</h3>
				</div>

				<div class="row plus">
					<h3 class="code">+</h3>
					<h3 style="display:inline">Keep up with my mountain biking expeditions</h3>
				</div>-->
			</div>

		</div>
	</div>
	<!-- </div> -->

</div>
@stop
