@extends('layout')
@section('content')
<div id="">
    <div class="tall">
        <div class="desc-middle">
            <p id="down-arrow" class="clickable"><img src="/img/arrow-down-white.png" class="down-arrow-lg" ></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="white-block">
                <a href="#content" name="content"></a>
                <div class="container mbike-section">
                    <div class="row">
                        <div class="col-md-12 gallery">
                            <h1>Mountain Biking Gallery</h1>
                            @foreach($pics as $pic)
                                <div class="col-md-2">
                                    <a class="fancybox" data-fancybox-group="gallery" href="{{$pic['large']}}">
                                    <img src="{{$pic['thumb']}}" class="img-responsive mbike-thumb">
                                        <span class="text-content"><span>Click for more</span></span>
                                    </a>
                            </div>
                            @endforeach
                            <div class="clearfix" id="insert"></div>
                            <a class="text-center clickable" id="show-more">Show More <i class="fa fa-chevron-down"></i></a>
                            <!-- <div class="row mbike-story">
                                <div class="col-md-6">
                                    <h3>Pandapas Pond (10/19/14)</h3> 
                                    <p>Great riding as usual. Went out with a friend and caught some pretty sick slow motion.
                                    </p>
                                </div>
                                <div class="col-md-3 col-md-offset-0">
                                    <img src="/img/mbike/burke_5_31_14/IONX0013_s.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-3 col-md-offset-0">
                                    <img src="/img/mbike/burke_map.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="row mbike-story">
                                <div class="col-md-6">
                                    <h3>Burke Farm</h3> 
                                    <p>First off, keep in mind you have buy a $25 dollar yearly pass in order to ride. The riding itself was alright. 
                                    Decently smooth, but just flat. It had some dips and turns, but overall it was just uneventful for me. I am used 
                                    to riding up a mountain then down that mountain.
                                    </p>
                                </div>
                                <div class="col-md-3 col-md-offset-0">
                                    
                                </div>
                                <div class="col-md-3 col-md-offset-0">
                                    <img src="/img/mbike/burke_map.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="row mbike-story">
                                <div class="col-md-6">
                                    <h3>Gateway Trail</h3> 
                                    <p>
                                The trail starts out awesome with a gazeebo and bench onlooking the mountain. Gateway is nearly impossible to ride up. Only very experienced and in-shape riders can go up without stopping. I rode about 50% of the time up.
                                    </p>
                                </div>
                                <div class="col-md-3 col-md-offset-0">
                                    <img src="/img/mbike/gateway_5_11_14/2014-05-11_12.32.21.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-3 col-md-offset-0">
                                    <img src="/img/mbike/burke_map.png" class="img-responsive">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    var page = 1;

    $('#show-more').click( function() {
        $.ajax( {
            url: "ajax/mbike_pics",
            data: {
                'page' : page 
            }
        }).success( function(data) {
            $.each( data.results, function( i, item ) {
                $('#insert').before('<div class="col-md-2">\
                        <a class="fancybox" data-fancybox-group="gallery" href="' + data.results[i].large + '">\
                        <img src="' + data.results[i].thumb + '" class="img-responsive mbike-thumb">\
                            <span class="text-content"><span>Click for more</span></span>\
                        </a>\
                    </div>')
            });
            if ( !data.left ) {
                $('#show-more').hide();
            }
            page++;
        });
    });
    /*
     *  Simple image gallery. Uses default settings
     */

    $('.fancybox').fancybox({
        helpers: {
            overlay: {
              locked: false
            }
        }
      });

    /*
     *  Different effects
     */


    /*
     *  Button helper. Disable animations, hide close button, change title type and content
     */

    // $('.fancybox-buttons').fancybox({
    //     openEffect: 'none',
    //     closeEffect: 'none',

    //     prevEffect: 'none',
    //     nextEffect: 'none',

    //     closeBtn: false,

    //     helpers: {
    //         title: {
    //             type: 'inside'
    //         },
    //         buttons: {}
    //     },

    //     afterLoad: function() {
    //         this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
    //     }
    // });


    /*
     *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
     */

    $('.fancybox-thumbs').fancybox({
        prevEffect: 'none',
        nextEffect: 'none',

        closeBtn: false,
        arrows: false,
        nextClick: true,

        helpers: {
            thumbs: {
                width: 50,
                height: 50
            }
        }
    });


});
</script>
@stop