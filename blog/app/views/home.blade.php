@extends('layout')

@section('content')
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
@stop
