@extends('layout')
@section('content')
<div class="sideways-large">
DEVELOPMENT
</div>
<div class="sideways-large-right">
DEVELOPMENT
</div>
<div class="container">
    <div class="row">
        <div class="dev_intro clearfix">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-3">
                        {{get_the_post_thumbnail($post->ID, array(200,200))}}
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@stop