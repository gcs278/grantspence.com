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
			<source src="/img/Mbike_s.mp4" type="video/mp4">
		</video>
	@endif
	<div class="container-fluid">
		<div class="row">
			<div class="md-col-12">
				<div class="tall">
					<div class="desc hidden-xs">
						<p>pandapas pond<br>8/21/14</p>
					</div>
					<div class="desc-middle hidden-sm hidden-md hidden-lg">
						<p>Welcome<br><img src="/img/arrow-down-white.png" class="down-arrow clickable" id="down-arrow"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="white-block">
	                <a href="#content" name="content"></a>
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 about-me">
								<h1>About Me</h1>
								<p>I am a motivated and dedicated student that has developed a great passion for my major. My objective in life is to never stop learning about technology and eventually contribute to developing new technologies. On the job and in college I have fun learning about how things work. It fills me with a sense of excitement and passion.</p>
								<h1>Where am I?</h1>
								<p>This is GrantSpence.com - an experimental website developed and designed by yours truly, Grant Spence. I am a Computer Engineering student at Virginia Tech and this website is a developmental ground for myself to push ideas and display them for the world to see.</p>
							</div>
							<div class="col-md-5 col-sm-6 col-xs-12 col-sm-offset-0 col-md-offset-1">
								<div class="right-pic">
									<?php echo HTML::image('img/mountain_pic.jpg', 'Grant Spence');?>
								</div>
							</div>
						</div>
						<div class="row links">
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
						</div>
					</div>
				</div>
			</div>
		</div>
		

@stop
