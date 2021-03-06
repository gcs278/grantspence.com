@extends('layout')
@section('content')
<!-- <div class="sideways-large">
DEVELOPMENT
</div>
<div class="sideways-large-right">
DEVELOPMENT
</div> -->
    <div class="container full-height minus50">
        <div class="row full-height">
            <div class="md-col-12 full-height">
                <div class="tall">
                    <div class="desc-middle">
                        <p>PROJECTS</p>
                        <!-- <p class="fancy strikethrough">Please Browse</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--End Background-->
</div> 


@foreach ( $projects as $key=>$project )
<div class="black-curtain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 col-sm-offset-1 col-sm-10">
                <div class="dev_intro clearfix">
                    <h1 class="proj-strikethrough">{{$names[$key]}}</h1>

                    @foreach ($project as $page)
                    <?php
                        global $post;
                        $post = get_post($page->ID);
                        setup_postdata( $post );
                    ?>
                    <div class="row project">
                        <div class="hidden-sm hidden-xs col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
                            <?php $thumb_id = get_post_thumbnail_id($page->ID);
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true)[0];
                            ?>
                            <img src="{{$thumb_url}}">
                        </div>
                        <?php $custom = get_post_custom($page->ID);
                        ?>
                        <div class="col-md-7 col-sm-12 project_details">
                            <h2>
                                {{$page->post_title}}
                            </h2>
                            @if (array_key_exists('url',$custom))
                                @if ( preg_match("/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/", $custom['url'][0]) && strcmp($custom['url'][0],"halyourrealestatepal.com"))
                                    <h5><a href="http://{{$custom['url'][0]}}" target="_blank">{{$custom['url'][0]}}</a></h5>
                                @else 
                                    <h5>{{$custom['url'][0]}}</h5>
                                @endif
                            @endif
                            @if (array_key_exists('date',$custom))
                                <h4>{{$custom['date'][0]}}</h4>
                            @endif
                            <div class="row hidden-lg hidden-md ">
                                <div class="col-sm-12 col-sm-offset-0">
                                    <?php $thumb_id = get_post_thumbnail_id($page->ID);
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true)[0];
                                    ?>
                                    <img src="{{$thumb_url}}">
                                </div>
                            </div>
                            <div class="proj-desc">{{the_content()}}</div>
                        </div>
                    </div>
                    <?php wp_reset_postdata( $post );?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@stop