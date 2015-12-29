<!DOCTYPE html>
<html>

<head>
    <title>Grant Spence - Computer Engineer</title>
    <script src="js/jquery-2.1.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
       <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    
    <meta name="description" content="Grant Spence Computer Engineer">
    <meta name="keywords" content="Grant Spence, Virginia Tech, Mountain Biking">
    <meta name="author" content="Grant Spence">
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
    <!--<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

     <link rel="stylesheet" href="bower_components/chartist/dist/chartist.min.css">
    <script src="bower_components/chartist/dist/chartist.min.js"></script>

    <script type="text/javascript" src="js/skrollr.min.js"></script>

    <style type="text/css">
    .fancybox-custom .fancybox-skin {
        box-shadow: 0 0 50px #222;
    }
    body {
        margin: 0 auto;
    }
    </style>
</head>
@if( Request::is('/') )
<body id="main" class="home">
@elseif ( Request::is('resume') )
<body id="main" class="resume" data-0="background-color: rgb(255,255,255);" data-100="background-color: rgb(255,255,255);">
@elseif ( Request::is('development') )
<body id="main" class="dev">
@elseif ( Request::is('mountbike') )
<body id="main" class="mbike">
@endif
    <div id="page">
        <nav class="navbar" id="lower_nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="/">Grant Spence</a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="clearfix hidden-sm hidden-md hidden-lg"></div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul id="nav_list_wrap" class="nav navbar-nav">
                    <li class="nav_link">
                        <a href="/" class="">Home</a>
                        <?php
                            if ( Request::is('/') )
                                echo '<hr class="underline">'
                        ?>
                    </li>

                    <li class="nav_link">
                        <a href="/resume">Resume</a>
                        <?php
                            if ( Request::is('resume') )
                                echo '<hr class="underline">'
                        ?>
                    </li>

                    <li class="nav_link">
                        <a href="/development" class="
                        <?php
                            if ( Request::is('development') )
                                echo 'active'
                        ?>">Development</a>
                    </li>

                    <li class="nav_link">
                        <a href="/mountbike" class="
                        <?php
                            if ( Request::is('mountbike') )
                                echo 'active'
                        ?>">Blog</a>
                    </li>

                </ul>
                </div>
            </div>
        </nav>
        <p id="back-top">
            <a href="#top"><span></span></a>
        </p>

        <div id="main-wrapper">
            @yield('content')
        </div>

        <div class="clearfooter"></div>
        <footer>
            <div class="col-md-9 col-centered full">
                <!--<div class="logo" id="logo_bottom">
					<a href="/">Grant Spence</a>
				</div> -->
                <div id="copyright">
                    Developed and Designed by Grant Spence &copy; 2015
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
<script>

$(document).ready(function() {
    // hide #back-top first
    $("#back-top").hide();
    
    var s = skrollr.init();
    // // fade in #back-top
    // $(function () {
    //     $(window).scroll(function () {
    //         if ($(this).scrollTop() > 100) {
    //             $('#back-top').fadeIn();
    //         } else {
    //             $('#back-top').fadeOut();
    //         }
    //     });

    //     // scroll body to 0px on click
    //     $('#back-top a').click(function () {
    //         $('body,html').animate({
    //             scrollTop: 0
    //         }, 800);
    //         return false;
    //     });
    // });
    var message = 1;
    setInterval(function(){
        if ( message == 1 ) {
          $('.desc-middle p').fadeOut(500, function() {
            $('.desc-middle p').text('Glad you\'re here');
            $('.desc-middle p').fadeIn(500, function() {
                message = 2;
            });
          });
        }
        else if ( message == 2 ) {
            $('.desc-middle p').fadeOut(500, function() {
            $('.desc-middle p').text('Stay awhile');
            $('.desc-middle p').fadeIn(500, function() {
                message = 3;
            });
          });
        }
        else if ( message == 3 ) {
            $('.desc-middle p').fadeOut(500, function() {
            $('.desc-middle p').text('Welcome');
            $('.desc-middle p').fadeIn(500, function() {
                message = 1;
            });
          });
        }
    }, 4000);
    
    $('.main .desc-middle').click( function() {
        var aTag = $("a[name='"+ "content" +"']");
        $('html,body').animate({scrollTop: $('#main-wrapper').height()},'slow');
    });

    // var topLower = $('#lower_nav').offset().top;
    // var isFixed = false;
    // // parallax header
    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop(),
    //         slowScroll = scroll / 3;
    //     if (scroll >= 0) {
    //         $('#upper_nav').css({
    //             transform: "translateY(" + slowScroll + "px)"
    //         });
    //         var scrollTop = $(window).scrollTop();
    //         if (scrollTop > topLower && !isFixed) {
    //             $('#lower_nav').css({
    //                 position: 'fixed',
    //                 top: 0,
    //             });
    //             $('#main-wrapper').css({
    //                 marginTop: '50px'
    //             });
    //             $('#lower_nav').animate({ backgroundColor: "black" }, 1000);
    //             isFixed = true;
    //         } else if (scrollTop == 0 && isFixed) {
    //             $('#lower_nav').css({
    //                 position: 'relative',
    //                 "background-color": 'none'
    //             });
    //             $('#main-wrapper').css({
    //                 marginTop: '0px'
    //             });
    //             $('#lower_nav').animate({ backgroundColor: "transparent" }, 1000);
    //             isFixed = false;
    //         }
    //     }
    // });

});
</script>
