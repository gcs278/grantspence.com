@extends('layout')

@section('content')
<div id="content">
        <div class="col-md-9 col-centered">
                <div id="container_left" class="col-sm-3 hidden-xs">
                        <?php
                        	echo HTML::image('img/development.jpg', 'Development', array('id'=>'mbike_img'));
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
                <div id="container_right" class="col-sm-9">
                        <div class="h_left">
                                <h1 class="code">[</h1>
                                <h2>DEVELOPMENT</h2>
                                <h1 class="code">]</h1>
                        </div>
                        <div class="p_left unjust">
                                <h2 class="code" >+</h2>
                                <h4 style="display: inline">ECE 4534: Automous Rover Project</h4>
                                <iframe width="560" height="315" src="//www.youtube.com/embed/Imejnir2LBw?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>

		        <div class="p_left unjust">
                                <h2 class="code" >+</h2>
                                <h4 style="display: inline">VT Hacks: Hapbee IOS Application</h4>
                                <iframe width="420" height="315" src="//www.youtube.com/embed/v-_qJB-Wpf0?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>  
                </div>

        </div>

@stop
