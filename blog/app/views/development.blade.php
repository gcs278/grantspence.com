@extends('layout')
@section('content')
<!-- <div class="sideways-large">
DEVELOPMENT
</div>
<div class="sideways-large-right">
DEVELOPMENT
</div> -->
<div class="container">
    <div class="row">
        <div class="md-col-12">
            <div class="tall">
                <div class="desc-middle">
                    <p>PROJECTS</p>
                    <!-- <p class="fancy strikethrough">Please Browse</p> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="black-curtain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="dev_intro clearfix">
                    <h1 class="strikethrough">WEBSITES & APPS</h1>

                    @foreach ($websites as $website)
                    <div class="row project">
                        <div class="col-md-3 image">
                            {{get_the_post_thumbnail($website->ID, array(215,215))}}
                        </div>
                        <?php $custom = get_post_custom($website->ID);
                        ?>
                        <div class="col-md-8 project_details">
                            <h2>
                                <a href="{{get_permalink($website->ID)}}">
                                    {{$website->post_title}}
                                </a>
                            </h2>
                            @if (array_key_exists('url',$custom))
                                <h5>{{$custom['url'][0]}}</h5>
                            @endif
                            @if (array_key_exists('date',$custom))
                                <h4>{{$custom['date'][0]}}</h4>
                            @endif
                            <p>{{$website->post_content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="black-curtain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="dev_intro clearfix">
                    <h1 class="strikethrough">Hardware Hacks</h1>

                    @foreach ($hardwares as $post)
                    <div class="row project">
                        <div class="col-md-3">
                            {{get_the_post_thumbnail($post->ID, array(215,215))}}
                        </div>
                        <?php $custom = get_post_custom($post->ID);?>
                        <div class="col-md-8 project_details">
                            <h2>
                                <a href="{{get_permalink($post->ID)}}">
                                    {{$post->post_title}}
                                </a>
                            </h2>
                            @if (array_key_exists('url',$custom))
                                <h5>{{$custom['url'][0]}}</h5>
                            @endif
                            @if (array_key_exists('date',$custom))
                                <h4>{{$custom['date'][0]}}</h4>
                            @endif
                            <p>{{$post->post_content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="black-curtain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="dev_intro clearfix">
                    <h1 class="strikethrough">IOS/Android Apps</h1>

                    @foreach ($apps as $post)
                    <div class="row project">
                        <div class="col-md-3">
                            {{get_the_post_thumbnail($post->ID, array(215,215))}}
                        </div>
                        <?php $custom = get_post_custom($post->ID);?>
                        <div class="col-md-8 project_details">
                            <h2>
                                <a href="{{get_permalink($post->ID)}}">
                                    {{$post->post_title}}
                                </a>
                            </h2>
                            @if (array_key_exists('url',$custom))
                                <h5>{{$custom['url'][0]}}</h5>
                            @endif
                            @if (array_key_exists('date',$custom))
                                <h4>{{$custom['date'][0]}}</h4>
                            @endif
                            <p>{{$post->post_content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@stop