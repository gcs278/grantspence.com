@extends('layout')

@section('content')
<a href="http://www.linkedin.com/pub/grant-spence/63/7a5/157/" target="_blank">LinkedIn</a>
<div class="container-fluid">
	<div class="row">
		<div class="begin" data-0="top: 40%;" data-200="top:-10%">
			<p>Hello there</p>
			<img src="/img/white-arrow.png" class="down-arrow" id="down-arrow">
		</div>
		<div class="white-block" data-0="right:-100%; top: 50px" data-200="right:0%;">
	                <a href="#content" name="content"></a>
					<div class="row">
						<div class="col-md-12 education">
							<h1>Education</h1>
							<p>Virginia Tech - Bachelor of Science, Computer Engineering (CPE)</p>
							<ul>
								<li>GPA 3.77 / 4.0</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="white-block" data-150="left:-100%; top: 50%" data-350="left:0%;">
					<div class="row">
						<div class="col-md-12 about-me">
							<h1>About Me</h1>
							<?php //echo HTML::image('img/grant2.jpg', 'Grant Spence');?>
							<p>I am a motivated and dedicated student that has developed a great passion 
								for my major. My objective in life is to never stop learning about 
								technology and eventually contribute to developing new technologies. 
								On the job and in college I have fun learning about how things work. It 
								fills me with a sense of excitement and passion.</p>
						</div>
					</div>
				</div>
	</div>
</div>
@stop

