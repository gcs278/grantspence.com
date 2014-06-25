@extends('layout')
@section('content')
<div id="content">
    <div class="col-md-9 col-centered">
        <div id="container_left" class="col-sm-3 hidden-xs">
            <?php echo HTML::image( 'img/development.jpg', 'Development', array( 'id'=>'mbike_img')); ?>
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
            <div class="container-fluid dev">
                <div class="h_left text-center">
                    <h1 class="code">#</h1>
                    <h1>DEVELOPMENT</h1>
                    <!-- <h1 class="code">]</h1> -->
                </div>
                <div class="devpost">
                    <div class="row head">
                        <div class="row titles">
                            <div class="col-md-8">
                                <h2>ECE 4534: Automous Rover Project</h2>
                            </div>
                            <div class="col-md-4" style="position: absolute; bottom: 0; right: 0;">
                                <h3 class="text-right">May 12th, 2014</h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <p>
                            As a team, we were tasked with building an autonomous rover to complete three main objectives:
                            <ol>
                                <li>
                                    <strong><h3 style="display: inline;">1.</h3></strong> The rover must circumnavigate the Computer Engineering Laboratory (CEL) in a counter-clockwise direction without any obstacles.
                                </li>
                                <li>
                                    <strong><h3 style="display: inline;">2.</h3></strong> The rover must circumnavigate the CEL with chicanes (obstacles). The rover must autonomously detect these obstructions and navigate around them to finish the course.
                                </li>
                                <li>
                                    <strong><h3 style="display: inline;">3.</h3></strong> The system should use the map developed from the initial traversal of the circuit (from either mandatory tasks #1 or #2) to be able to traverse the circuit faster a second time.
                                </li>
                            </ol>
                        </p>
                    </div>
                    <div class="col-md-11 col-centered">
                            <iframe width="560" height="315" style="max-width:100%" src="//www.youtube.com/embed/Imejnir2LBw?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="devpost">
                    <div class="row head">
                        <div class="row titles">
                            <div class="col-md-8">
                                <h2>VT Hacks: Hapbee IOS Application</h2>
                            </div>
                            <div class="col-md-4" style="position: absolute; bottom: 0; right: 0;">
                                <h3 class="text-right">April 20th, 2014</h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <p>
                            <strong><h5 style="display: inline;">Hackathon @ VT:</h5></strong> Our three-man team consisted of two developers and one graphics designer. 
                            We built this application in approximately 20 hours, pulling two all-nighters. 
                        </p>
                        <p>
                            <strong><h5 style="display: inline;">Hapbee</h5></strong> is an game developed for IOS 7 using IOS sprite-kits. In this game, you are a bumblebee that needs to learn how to fly. 
                            Avoid the rain droplets while trying to get the honeycombs to regain life and the flowers for extra points.
                        </p>
                    </div>
                    <div class="col-md-8 col-centered">
                        <iframe width="420" height="315" style="max-width:100%" src="//www.youtube.com/embed/v-_qJB-Wpf0?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop