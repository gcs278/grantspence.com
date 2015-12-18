@extends('layout')
@section('content')
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<style type="text/css">
.fancybox-custom .fancybox-skin {
    box-shadow: 0 0 50px #222;
}
body {
    margin: 0 auto;
}
</style>


<style type="text/css">
#map-canvas {
    height: 500px;
    width: 90%;
    margin: 0px auto;
}
</style>
	@if (!$mobile)
		<video autoplay muted loop id="bgvid">
			<source src="/img/mounts.mp4" type="video/mp4">
		</video>
	@endif
	<div class="container">
		<div class="row">
			<div class="md-col-12">
				<div class="tall">
					<div class="desc hidden-xs">
						<!-- <p>ROCKY MOUNTAINS<br>6/13/15</p> -->
					</div>

					<div class="desc-middle clickable">
						<p>Welcome</p>
							<img src="/img/black-arrow.png" class="down-arrow" id="down-arrow">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
				<div class="white-block" data-0="right:-100%; top: 50px" data-150="right:-50%;">
	                <a href="#content" name="content"></a>
					<div class="row">
						<div class="col-md-12 about-me">
							<div class='row'>
								<div class="col-md-6">
									<h1>About Me</h1>
								</div>
								<div class="col-md-6">
									<?php echo HTML::image('img/grant.jpg', 'Grant Spence');?>
								</div>
							</div>
							<p>I am a motivated and dedicated student that has developed a great passion for my major. My objective in life is to never stop learning about technology and eventually contribute to developing new technologies. On the job and in college I have fun learning about how things work. It fills me with a sense of excitement and passion.</p>
						</div>
<!-- 						<div class="row links">
							<div class="col-md-10 col-centered">
								<div class="col-md-4">
									<a href="/mountbike">
										<h2 class="text-center">Mountain Biking</h2>
										<div><?php echo HTML::image('img/white_mount.png', 'Grant Spence', array('class'=>'mountain_clip'));?></div>
									</a>
								</div>
								<div class="col-md-4">
									<a href="/resume">
										<h2 class="text-center">Resume</h2>
										<?php echo HTML::image('img/resume-icon.png', 'Grant Spence', array('class'=>'mountain_clip'));?>
									</a>
								</div>
								<div class="col-md-4">
									<a href="/development">
										<h2 class="text-center">Development</h2>
										<?php echo HTML::image('img/chip.png', 'Grant Spence', array('class'=>'chip_icon'));?>
									</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="white-block" data-150="left:-100%; top: 50%" data-350="left:0%;">
					<div class="row">
						<div class="col-md-12 about-me">
							<h1>Where am I?</h1>
							<p>This is GrantSpence.com - an experimental website developed and designed by yours truly, Grant Spence. I am a Computer Engineering student at Virginia Tech and this website is a developmental ground for myself to push ideas and display them for the world to see.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		

@stop
