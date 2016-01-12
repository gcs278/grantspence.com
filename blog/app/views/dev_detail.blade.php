@extends('layout')
@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="md-col-12">
            <div class="tall">
                <div class="desc-middle">
                    <p>PROJECTS</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="black-curtain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="dev_intro clearfix">
                    <!-- <h1 class="strikethrough">WEBSITES & APPS</h1> -->

                    <div class="row project">
                        <div class="col-md-3 image">
                            {{get_the_post_thumbnail($page->ID, array(215,215))}}
                        </div>
                        <?php $custom = get_post_custom($page->ID);
                        ?>
                        <div class="col-md-8 project_details">
                            <h2>{{$page->post_title}}</h2>
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