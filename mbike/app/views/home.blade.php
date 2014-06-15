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
</style>

<div class="row" >
    <div class="col-md-10 col-centered">
        <div class="row">
            <div class="col-md-7">
                <div class="leftcontent container-fluid">
                    <div class="row nopadding">
                        <h1>Gateway Trail</h1>
                        <!-- <hr> -->
                    </div>
                    <div class="row nopadding">
                        <div id="gateway5_11_14_p" class="thumbnails">
                            <div class="col-md-7">
                                <h2 class="text-left">Going Up</h2>
                                <p class="review">
                                    The trail starts out awesome with a gazeebo and bench onlooking the mountain. Gateway is nearly impossible to ride up. 
                                    Only very experienced and in-shape riders can go up without stopping. I rode about 50% of the time up.
                                </p>
                                <h2 class="text-left">Going Down</h2>
                                <p class="review">
                                    Going down is much better. A steep drop, but not too smooth so you won't be able to gain much speed. Guys race down it. My time was about 
                                    8 minutes, but I know a guy that gets down in 5.
                                </p>
                                <div id="gateway5_11_14_p" class="thumbnails">
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.31.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.31_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.00.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.00_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.07.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.07_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="hidden">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.25.28.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.25.28_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.38.37.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.38.37_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.53.52.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.53.52_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.54.08.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.54.08_s.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 nopadding">
                                <div class="row nopadding">
                                    <div class="rating">
                                        <div class="row nopadding">
                                            <div class="col-lg-6">
                                                <h4 class="text-left">My Rating:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="text-right">&#9733;&#9733;&#9733;&#9733;&#9734;</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Difficulty:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">Advanced</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Distance:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">7.31 MI</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Elevation:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">1234 FT</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Traffic:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">Minimal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row nopadding">
                                    <div class="col-md-12 col-centered">
                                        <!-- <h3 class="text-left">Map</h3> -->
                                        <div class="map">
                                            <img src="img/mbike/gateway_map.png">
                                            <img class="elevation_img" src="img/mbike/gateway_el.png">
                                        </div>
                                    </div>
                                </div>

                                <!--                                 <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg">
                                    <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" />
                                </a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="rightcontent">
                    <h2>Right Content</h2>
                </div>
            </div>
        </div>
        <div class="row" id="second">
            <div class="col-md-7">
                <div class="leftcontent container-fluid">
                    <div class="row nopadding">
                        <h1>Gateway Trail</h1>
                        <!-- <hr> -->
                    </div>
                    <div class="row nopadding">
                        <div id="gateway5_11_14_p" class="thumbnails">
                            <div class="col-md-7">
                                <h2 class="text-left">Going Up</h2>
                                <p class="review">
                                    The trail starts out awesome with a gazeebo and bench onlooking the mountain. Gateway is nearly impossible to ride up. 
                                    Only very experienced and in-shape riders can go up without stopping. I rode about 50% of the time up.
                                </p>
                                <h2 class="text-left">Going Down</h2>
                                <p class="review">
                                    Going down is much better. A steep drop, but not too smooth so you won't be able to gain much speed. Guys race down it. My time was about 
                                    8 minutes, but I know a guy that gets down in 5.
                                </p>
                                <div id="gateway5_11_14_p" class="thumbnails">
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.31.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.31_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.00.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.00_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.07.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.07_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="hidden">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.25.28.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.25.28_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.38.37.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.38.37_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.53.52.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.53.52_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.54.08.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.54.08_s.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 nopadding">
                                <div class="row nopadding">
                                    <div class="rating">
                                        <div class="row nopadding">
                                            <div class="col-lg-6">
                                                <h4 class="text-left">My Rating:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="text-right">&#9733;&#9733;&#9733;&#9733;&#9734;</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Difficulty:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">Advanced</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Distance:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">7.31 MI</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Elevation:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">1234 FT</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Traffic:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">Minimal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row nopadding">
                                    <div class="col-md-12 col-centered">
                                        <!-- <h3 class="text-left">Map</h3> -->
                                        <div class="map">
                                            <img src="img/mbike/gateway_map.png">
                                            <img class="elevation_img" src="img/mbike/gateway_el.png">
                                        </div>
                                    </div>
                                </div>

                                <!--                                 <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg">
                                    <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" />
                                </a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="rightcontent">
                    <h2>Right Content</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="leftcontent container-fluid">
                    <div class="row nopadding">
                        <h1>Gateway Trail</h1>
                        <!-- <hr> -->
                    </div>
                    <div class="row nopadding">
                        <div id="gateway5_11_14_p" class="thumbnails">
                            <div class="col-md-7">
                                <h2 class="text-left">Going Up</h2>
                                <p class="review">
                                    The trail starts out awesome with a gazeebo and bench onlooking the mountain. Gateway is nearly impossible to ride up. 
                                    Only very experienced and in-shape riders can go up without stopping. I rode about 50% of the time up.
                                </p>
                                <h2 class="text-left">Going Down</h2>
                                <p class="review">
                                    Going down is much better. A steep drop, but not too smooth so you won't be able to gain much speed. Guys race down it. My time was about 
                                    8 minutes, but I know a guy that gets down in 5.
                                </p>
                                <div id="gateway5_11_14_p" class="thumbnails">
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.31.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.31_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.00.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.00_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3 nopadding">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.34.07.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_12.34.07_s.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="hidden">
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.25.28.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.25.28_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.38.37.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.38.37_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.53.52.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.53.52_s.jpg" alt="" />
                                        </a>
                                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_13.54.08.jpg">
                                            <img src="img/mbike/gateway_5_11_14/2014-05-11_13.54.08_s.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 nopadding">
                                <div class="row nopadding">
                                    <div class="rating">
                                        <div class="row nopadding">
                                            <div class="col-lg-6">
                                                <h4 class="text-left">My Rating:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="text-right">&#9733;&#9733;&#9733;&#9733;&#9734;</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Difficulty:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">Advanced</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Distance:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">7.31 MI</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Elevation:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">1234 FT</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6">
                                            <h4 class="text-left">Traffic:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-right">Minimal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row nopadding">
                                    <div class="col-md-12 col-centered">
                                        <!-- <h3 class="text-left">Map</h3> -->
                                        <div class="map">
                                            <img src="img/mbike/gateway_map.png">
                                            <img class="elevation_img" src="img/mbike/gateway_el.png">
                                        </div>
                                    </div>
                                </div>

                                <!--                                 <a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg">
                                    <img src="img/mbike/gateway_5_11_14/2014-05-11_12.32.21_s.jpg" alt="" />
                                </a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="rightcontent">
                    <h2>Right Content</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    preload (['../img/mbike/carvins_large.jpg']);

    function preload(arrayOfImages) {
        $(arrayOfImages).each(function(){
            $('<img/>')[0].src = this;
            // Alternatively you could use:
            // (new Image()).src = this;
        });
    }


    $(window).scroll( function() {
        if (isScrolledIntoView($("#second")) ) {
            // $("#page").css("background-color", "yellow");
            $("#page").css("background-image","url(../img/mbike/carvins_large.jpg)");
        }
    });

    function isScrolledIntoView(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

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