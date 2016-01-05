@extends('layout')
@section('content')
<div class="sideways-large">
DEVELOPMENT
</div>
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
        <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif;
        ?>
        </div>
    </div>
    <div class="row post_img">
        <div class="col-md-12">
            <?php
                // Post thumbnail.
                // the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'class'=>'center-block') );
            ?>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-8 col-md-offset-2">
        <?php
            /* translators: %s: Name of current post */
            echo do_shortcode($page->post_content);
            the_content( sprintf(
                __( 'Continue reading %s', 'twentyfifteen' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );
        ?>
        </div>
    </div><!-- .entry-content -->

    <?php
        // Author bio.
        if ( is_single() && get_the_author_meta( 'description' ) ) :
            get_template_part( 'author-bio' );
        endif;
    ?>

    <footer class="entry-footer">
        <?php twentyfifteen_entry_meta(); ?>
        <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->

</div><!-- #post-## -->
</div>
@stop