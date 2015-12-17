@extends('layout')
@section('content')
<div id="">
    <div class="tall">
        <div class="center">
            <div class="desc-middle">
                <p class="clickable" id="down-arrow"><img src="/img/arrow-down-white.png" class="down-arrow-lg"></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="white-block">
            <a href="#content" name="content"></a>
            <div class="container">
                <div class="row">
                    <div class="container-fluid dev">
                        <div class="h_left text-center">
                            <h1 class="code">#</h1>
                            <h1>DEVELOPMENT</h1>
                        </div>
                        <div class="devpost">
                            <div class="row head">
                                <div class="row titles">
                                    <div class="col-md-8">
                                        <h2>ECE 4534: Automous Rover</h2>
                                    </div>
                                    <div class="col-md-4 date">
                                        <h3 class="text-right-md text-left-sm text-left-xs text-right-lg">May 12th, 2014</h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <p>
                                    As a team, we were tasked with building an autonomous rover to complete three main objectives:
                                    <ol>
                                        <li>
                                            <strong>
                                                <h3 style="display: inline;">1.</h3>
                                            </strong>The rover must circumnavigate the Computer Engineering Laboratory (CEL) in a counter-clockwise direction without any obstacles.
                                        </li>
                                        <li>
                                            <strong>
                                                <h3 style="display: inline;">2.</h3>
                                            </strong>The rover must circumnavigate the CEL with chicanes (obstacles). The rover must autonomously detect these obstructions and navigate around them to finish the course.
                                        </li>
                                        <li>
                                            <strong>
                                                <h3 style="display: inline;">3.</h3>
                                            </strong>The system should use the map developed from the initial traversal of the circuit (from either mandatory tasks #1 or #2) to be able to traverse the circuit faster a second time.
                                        </li>
                                    </ol>
                                </p>
                            </div>
                            <div class="col-md-6 col-centered">
                                <iframe width="100%" height="315" style="max-width:100%" src="//www.youtube.com/embed/Imejnir2LBw?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="devpost">
                            <div class="row head">
                                <div class="row titles">
                                    <div class="col-md-8">
                                        <h2>VT Hacks: Hapbee IOS Application</h2>
                                    </div>
                                    <div class="col-md-4 date">
                                        <h3 class="text-right-md text-left-sm text-left-xs text-right-lg">April 20th, 2014</h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <p>
                                    <strong>
                                        <h5 style="display: inline;">Hackathon @ VT:</h5>
                                    </strong><p class="inline   ">Our three-man team consisted of two developers and one graphics designer. We built this application in approximately 20 hours, pulling two all-nighters.</p>
                                </p>
                                <p>
                                    <strong>
                                        <h5 style="display: inline;">Hapbee</h5>
                                    </strong><p class="inline">is an game developed for IOS 7 using IOS sprite-kits. In this game, you are a bumblebee that needs to learn how to fly. Avoid the rain droplets while trying to get the honeycombs to regain life and the flowers for extra points.</P>
                                </p>
                            </div>
                            <div class="col-md-6 col-centered">
                                <iframe width="100%" height="315" style="max-width:100%" src="//www.youtube.com/embed/v-_qJB-Wpf0?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop