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
  #map-canvas { height: 500px;
  				width: 90%;
  				margin: 0px auto;}
</style>
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA65BT89mW1tffBkHN60z5X9TpE9gObYNc&sensor=false">
</script>


<div id="content">

        <div class="column">

                <div id="container_left">
                        <?php
                        	echo HTML::image('img/mbike/mbike.jpg', 'Mountain Biking', array('id'=>'mbike_img'));
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
                                <h2>MOUNTAIN BIKING</h2>
                                <h1 class="code">]</h1>
                        </div>
                        <div id="map-canvas"></div>
                        <div class="p_left">
                       		<h3 class="code toggler" id="gateway5_11_14" >+</h3>
							<a id="gateway5_11_14">Gateway Trail 5/11/14</a>
							<p>
								<div id="gateway5_11_14_p" style="display:none">
									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.31.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.31_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.00.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.00_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.07.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.07_s.jpg" alt="" /></a>
									
									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.25.28.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_13.25.28_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.38.37.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_13.38.37_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.53.52.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_13.53.52_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.54.08.jpg"><img src="img/mbike/gateway_5_11_14/2014-05-11_13.54.08_s.jpg" alt="" /></a>
								</div>
							</p>
					</div>

					<div class="p_left">
                       		<h3 class="code toggler" id="jacobs_ladder_5_12_14" >+</h3>
							<a id="jacobs5_11_14">Jacobs Ladder 5/12/14</a>
							<p>
								<div id="jacobs_ladder_5_12_14_p" style="display:none">
									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.47.30.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.47.30_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.47.43.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.47.43_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.58.04.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.58.04_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.58.06.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_12.58.06_s.jpg" alt="" /></a>
									
									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_13.05.08.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_13.05.08_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_13.05.11-1.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_13.05.11-1_s.jpg" alt="" /></a>

									<a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/jacobs_ladder_5_12_14/2014-05-12_13.05.11-2.jpg"><img src="img/mbike/jacobs_ladder_5_12_14/2014-05-12_13.05.11-2_s.jpg" alt="" /></a>
								</div>
							</p>
					</div>
                </div>
        </div>

</div>

<script type="text/javascript">
	$(document).ready(function() {

			var map;
			function initialize() {
			var mapOptions = {
				zoom: 7,
				mapTypeId: google.maps.MapTypeId.TERRAIN,
				center: new google.maps.LatLng(37.8560698,-79.5967062)
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

			var marker = new google.maps.Marker({
			    position: new google.maps.LatLng(37.2488802,-80.4604863),
			    map: map,
			    title:"Gateway Trail"
			});

			var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h1 id="firstHeading" class="firstHeading">Gateway Trail</h1>'+
			  '<div id="bodyContent">'+
			  '<p><b>Gateway Trail</b> of <b>Pandapas Pond</b> in Blacksburg, VA<br>'+
			  '<a href="#gateway5_11_14">Photos 5/11/14</p> ' +
			  '</div>'+
			  '</div>';

			var infowindow = new google.maps.InfoWindow({
			  content: contentString
			});

			google.maps.event.addListener(marker, 'click', function() {
			    infowindow.open(map,marker);
			});

			var jacobLadder = new google.maps.Marker( {
				position: new google.maps.LatLng(37.2592765,-80.4760783),
				map: map,
				title: "Jacobs Ladder"
			});

			var jacobLadderString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h1 id="firstHeading" class="firstHeading">Jacobs Ladder</h1>'+
			  '<div id="bodyContent">'+
			  '<p><b>Jacobs Ladder</b> of <b>Pandapas Pond</b> in Blacksburg, VA<br>'+
			  '<a href="#jacobs5_11_14">Photos 5/11/14</p> ' +
			  '</div>'+
			  '</div>';

			var jacobLadderInfo = new google.maps.InfoWindow({
			  content: jacobLadderString
			});

			google.maps.event.addListener(jacobLadder, 'click', function() {
			    infowindow.open(map,jacobLadder);
			});

		}

		google.maps.event.addDomListener(window, 'load', initialize);

		$('.toggler').click( function() {
			var sliding = $("#"+$(this).attr('id')+"_p");
			var  toggler = $(this);

			sliding.slideToggle("fast", function() {
				if ( $(this).is(':hidden') )
					toggler.text('+');
				else
					toggler.text('-');
			});

		});

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
				title : {
					type : 'outside'
				},
				overlay : {
					speedOut : 0
				}
			}
		});

		// Disable opening and closing animations, change title type
		$(".fancybox-effects-b").fancybox({
			openEffect  : 'none',
			closeEffect	: 'none',

			helpers : {
				title : {
					type : 'over'
				}
			}
		});

		// Set custom style, close if clicked, change title type and overlay color
		$(".fancybox-effects-c").fancybox({
			wrapCSS    : 'fancybox-custom',
			closeClick : true,

			openEffect : 'none',

			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					css : {
						'background' : 'rgba(238,238,238,0.85)'
					}
				}
			}
		});

		// Remove padding, set opening and closing animations, close if clicked and disable overlay
		$(".fancybox-effects-d").fancybox({
			padding: 0,

			openEffect : 'elastic',
			openSpeed  : 150,

			closeEffect : 'elastic',
			closeSpeed  : 150,

			closeClick : true,

			helpers : {
				overlay : null
			}
		});

		/*
		 *  Button helper. Disable animations, hide close button, change title type and content
		 */

		$('.fancybox-buttons').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',

			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn  : false,

			helpers : {
				title : {
					type : 'inside'
				},
				buttons	: {}
			},

			afterLoad : function() {
				this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			}
		});


		/*
		 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
		 */

		$('.fancybox-thumbs').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn  : false,
			arrows    : false,
			nextClick : true,

			helpers : {
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});

		/*
		 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
		*/
		$('.fancybox-media')
			.attr('rel', 'media-gallery')
			.fancybox({
				openEffect : 'none',
				closeEffect : 'none',
				prevEffect : 'none',
				nextEffect : 'none',

				arrows : false,
				helpers : {
					media : {},
					buttons : {}
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
				href : 'iframe.html',
				type : 'iframe',
				padding : 5
			});
		});

		$("#fancybox-manual-c").click(function() {
			$.fancybox.open([
				{
					href : '1_b.jpg',
					title : 'My title'
				}, {
					href : '2_b.jpg',
					title : '2nd title'
				}, {
					href : '3_b.jpg'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});


	});
</script>

@stop
