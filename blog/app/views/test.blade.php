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


<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
#map-canvas {
    height: 500px;
    width: 90%;
    margin: 0px auto;
}
</style>

	<video autoplay muted loop id="bgvid">
		<source src="/img/Mbike_s.mp4" type="video/mp4">
	</video>
	<div class="container-fluid">
		<div class="row">
			<div class="md-col-12">
				<div class="tall">
					<div class="desc">
						<p>pandapas pond<br>8/21/14</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="white-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6 about-me">
								<h1>About Me</h1>
								<p>I am a motivated and dedicated student that has developed a great passion for my major. My objective in life is to never stop learning about technology and eventually contribute to developing new technologies. On the job and in college I have fun learning about how things work. It fills me with a sense of excitement and passion.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<div class="right-pic">
									<?php echo HTML::image('img/mountain_pic.jpg', 'Grant Spence');?>
								</div>
							</div>
						</div>
						<div class="row adventures">
							<div class="col-md-12">
								<h1>Adventures</h1>
							</div>
							<div class="col-md-3">
								<div class="thumbnails">
									<div class="col-xs-12 nopadding">
	                                    <a class="fancybox-thumbs" data-fancybox-group="thumb1" href="img/kayaking/IONX0001.jpg">
	                                        <img src="img/kayaking/IONX0001_s.jpg" alt="" />
	                                        <span class="text-content"><span>Click for more</span></span>
	                                    </a>
	                                </div>
<!-- 	                                <div class="col-xs-4 nopadding">
	                                    <a class="fancybox-thumbs" data-fancybox-group="thumb1" href="img/mbike/burke_5_31_14/IONX0013.jpg">
	                                        <img src="img/mbike/burke_5_31_14/IONX0013_s.jpg" alt="" />
	                                        <span class="text-content"><span>Click for more</span></span>
	                                    </a>
	                                </div>
	                                <div class="col-xs-4 nopadding">
	                                    <a class="fancybox-thumbs" data-fancybox-group="thumb1" href="img/mbike/burke_5_31_14/IONX0003.jpg">
	                                        <img src="img/mbike/burke_5_31_14/IONX0003_s.jpg" alt="" />
	                                        <span class="text-content"><span>Click for more</span></span>
	                                    </a>
	                                </div> -->
	                            </div>
	                        </div>
	                        <div class="col-md-8">
								<p>So I went kayaking the other. Here are some pretty cool shots of my trip. We went out from a harbor on the Eastern Shore of Virginia and kayaked to Fisherman's Island.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<script>
$(document).ready(function() {

    /*
     *  Simple image gallery. Uses default settings
     */

    $('.fancybox').fancybox();

    /*
     *  Different effects
     */

    // Change title type, overlay closing speed
    $(".fancybox-effects-a").fancybox({
        helpers: {
            title: {
                type: 'outside'
            },
            overlay: {
                speedOut: 0
            }
        }
    });

    // Disable opening and closing animations, change title type
    $(".fancybox-effects-b").fancybox({
        openEffect: 'none',
        closeEffect: 'none',

        helpers: {
            title: {
                type: 'over'
            }
        }
    });

    // Set custom style, close if clicked, change title type and overlay color
    $(".fancybox-effects-c").fancybox({
        wrapCSS: 'fancybox-custom',
        closeClick: true,

        openEffect: 'none',

        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
                css: {
                    'background': 'rgba(238,238,238,0.85)'
                }
            }
        }
    });

    // Remove padding, set opening and closing animations, close if clicked and disable overlay
    $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect: 'elastic',
        openSpeed: 150,

        closeEffect: 'elastic',
        closeSpeed: 150,

        closeClick: true,

        helpers: {
            overlay: null
        }
    });

    /*
     *  Button helper. Disable animations, hide close button, change title type and content
     */

    $('.fancybox-buttons').fancybox({
        openEffect: 'none',
        closeEffect: 'none',

        prevEffect: 'none',
        nextEffect: 'none',

        closeBtn: false,

        helpers: {
            title: {
                type: 'inside'
            },
            buttons: {}
        },

        afterLoad: function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });


    /*
     *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
     */

    $('.fancybox-thumbs').fancybox({
        prevEffect: 'none',
        nextEffect: 'none',

        closeBtn: false,
        arrows: false,
        nextClick: true,

        helpers: {
            thumbs: {
                width: 50,
                height: 50
            }
        }
    });

    /*
     *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
     */
    $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            prevEffect: 'none',
            nextEffect: 'none',

            arrows: false,
            helpers: {
                media: {},
                buttons: {}
            }
        });

    /*
     *  Open manually
     */

    $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
    });

    $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
            href: 'iframe.html',
            type: 'iframe',
            padding: 5
        });
    });

    $("#fancybox-manual-c").click(function() {
        $.fancybox.open([{
            href: '1_b.jpg',
            title: 'My title'
        }, {
            href: '2_b.jpg',
            title: '2nd title'
        }, {
            href: '3_b.jpg'
        }], {
            helpers: {
                thumbs: {
                    width: 75,
                    height: 50
                }
            }
        });
    });


});
</script>
@stop
