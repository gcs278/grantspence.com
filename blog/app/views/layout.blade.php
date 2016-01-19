<!DOCTYPE html>
<html>

<head>
    <title>Grant Spence - Web Developer</title>

    <!--Favicons-->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-196x196.png?v=3" sizes="196x196" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png?v=3" sizes="96x96" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png?v=3" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png?v=3" sizes="16x16" />
    <link rel="icon" type="image/png" href="/img/favicon/favicon-128.png?v=3" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <!--Facebook Open Graph-->
    <meta property="og:url"                content="http://grantspence.com" />
    <meta property="og:title"              content="Grant's Portfolio and Blog" />
    <meta property="og:description"        content="An experimental website and blog in which I can push ideas for the world to see. My portfolio, projects, hacks, and how-to’s." />
    <meta property="og:image"              content="http://grantspence.com/img/grant3.jpeg" />
    <meta property="fb:app_id"              content="800590736740191" />

    <!--JS and CSS Links Includes-->
    <script src="/js/jquery-2.2.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <meta name="description" content="Grant Spence Computer Engineer">
    <meta name="keywords" content="An experimental website and blog in which I can push ideas for the world to see. My portfolio, projects, hacks, and how-to’s.">
    <meta name="author" content="Grant Spence">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

</head>
@if( Request::is('/') )
<body id="main" class="home">
@elseif ( Request::is('resume') )
<body id="main" class="resume">
@elseif ( Request::is('development') )
<body id="main" class="dev">
@elseif ( Request::is('blog') )
<body id="main" class="blog">
@elseif ( Request::is('dev/*') )
<body id="main" class="projects">
@elseif ( Request::is('hacks/*') )
<body id="main" class="blog">
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
                                // if ( Request::is('/') )
                                //     echo '<hr class="underline">'
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
                            <a href="/development">Projects</a>
                                <?php
                                if ( Request::is('development') )
                                    echo '<hr class="underline">'
                            ?>
                        </li>

                        <li class="nav_link">
                            <a href="/blog" class="">Blog</a>
                            <?php
                                if ( Request::is('blog') )
                                    echo '<hr class="underline">'
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="main-wrapper">
            @yield('content')
        </div>

        <div class="clearfooter"></div>

        <footer>
            <div class="col-md-9 col-centered footer_div">
                <!--<div class="logo" id="logo_bottom">
					<a href="/">Grant Spence</a>
				</div> -->
                <div id="copyright">
                    Developed and Designed by Grant Spence &copy; 2016
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
<script>

$(document).ready(function() {
    $('.tall .desc-middle').click( function() {
        $('html,body').animate({scrollTop: $('.black-curtain').offset().top},'slow');
    });
});
</script>
