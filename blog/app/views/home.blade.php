@extends('layout')
@section('content')
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
			<!-- <source src="/img/mounts.mp4" type="video/mp4"> -->
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
						<!-- <img class="circle" src="/img/grant3.jpeg" > -->
						<p>WEB DEVELOPER</p>
						<p class="fancy strikethrough">Aspiring Designer</p>
						<!-- <img src="/img/black-arrow.png" class="down-arrow" id="down-arrow"> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="black-curtain full">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<div class="home_intro">
						<img class="circle" src="/img/grant3.jpeg" >
						<h1 class="strikethrough">GRANT SPENCE</h1>
						<p>I am dedicated and passionate full stack web developer. My objective in life is to never stop learning about technology and eventually contribute to developing new technologies.
						My career goal is to develop web-based technology and design that inspire.</p>
						<!-- <p id="explore">Please explore my site and let me know what you think!</p> -->
						<div class="link-box-section">
							<a href="/resume" class="link-box clickable">
								RESUME
							</a>
							<a href="/development" class="link-box clickable">
								PROJECTS
							</a>
							<a href="/blog" class="link-box clickable">
								BLOG
							</a>
						</div>
						<!-- <div class="image-text">
							<img class="circle" src="/img/desk2.jpg">
							<span>Projects</span>
						</div> -->
						<h3>Want to talk business?</h3>
						<div class="social">
							<div class="social__item">
					            <a target="_blank" href="https://www.linkedin.com/in/gcs278" class="social__icon--linkedin">
					            	<i class="icon--linkedin"></i>
					            </a>
						    </div>
						    <div class="social__item">
					            <a target="_blank" href="https://github.com/gcs278" class="social__icon--github">
			            	<i class="icon--github"></i></a>
						    </div>
						    <div class="social__item">
					            <a target="_blank" href="hhttps://www.facebook.com/GrantSpence" class="social__icon--facebook">
					            	<i class="icon--facebook"></i></a>
						    </div>
							<p>GCS278<span>@</span>VT.EDU</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <section class="parallax-back">
		<div class="container">
				<div class="row">
					<div class="md-col-12">
						<div class="tall">
							<div class="desc-middle clickable">
								<p>ADVENTURER</p>
								<p class="fancy strikethrough">No boundaries</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
		
	<div class="black-curtain">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<div class="adventure">
						<h1>I like to explore</h1>
						<img class="square" src="/img/hike.JPG" >
						<img class="square" src="/img/hike2.JPG" >
						<img class="square" src="/img/hike3.JPG" >
						<p>I am a motivated and dedicated student that has developed a great passion 
								for my major. My objective in life is to never stop learning about 
								technology and eventually contribute to developing new technologies. 
								On the job and in college I have fun learning about how things work. It 
								fills me with a sense of excitement and passion.</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->

@stop
