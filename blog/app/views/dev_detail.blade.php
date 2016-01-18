@extends('layout')
@section('content')
<div class="container">
<!--     <div class="row">
        <div class="md-col-12">
            <div class="tall">
                <div class="desc-middle">
                    <p>PROJECTS</p>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<!--      <div class="row itsme">
            <div class="center-block text-center">
                <img class="img-center" src="/img/grant3.jpeg<?php //echo wp_get_attachment_image_src( 18, 'large' )[0]; ?>"> 
                <p class="text-center name">Grant Spence</p>
                <p class="date">October 28th, 2015</p>
            </div>
    </div> -->

    <div class="project-post">
        <div class="row main-img">
            <div class="col-md-offset-2 col-md-8">
                <?php $thumb_id = get_post_thumbnail_id($page->ID);
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true)[0];
                ?>
                <img src="{{$thumb_url}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <h1>{{$page->post_title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="clearfix">
                    <div class="row">
                        <?php $custom = get_post_custom($page->ID);
                        ?>
                        <div class="col-md-8 project_details">
                            @if (array_key_exists('url',$custom))
                                <h5>{{$custom['url'][0]}}</h5>
                            @endif
                            @if (array_key_exists('date',$custom))
                                <h4>{{$custom['date'][0]}}</h4>
                            @endif
                            <p>{{$page->post_content}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop