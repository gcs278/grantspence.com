@extends('layout')
@section('content')
<!-- <div class="sideways-large">
DEVELOPMENT
</div> -->
<?php global $post;
    $post = $page;
    setup_postdata($post);
    global $withcomments;
$withcomments = 1;
        ?>

<div class="container">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="row itsme">
                <div class="center-block text-center">
                    <img class="img-center" src="/img/grant3.jpeg<?php //echo wp_get_attachment_image_src( 18, 'large' )[0]; ?>"> 
                    <p class="text-center name">Grant Spence</p>
                    <p class="date">October 28th, 2015</p>
                </div>
        </div>

        <div class="row header">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="entry-title">
                    {{$page->post_title}}
                </h2>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2">
            <?php
                echo do_shortcode($page->post_content);
            ?>
            </div>
        </div><!-- .entry-content -->
        <div class="row comment-wrapper">
            <div class="col-md-6 col-md-offset-3">
                <?php if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </div>
        </div>
    </div><!-- #post-## -->
</div>
@stop