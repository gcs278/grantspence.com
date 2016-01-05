<?php
// Bike Structure
class bikeStruct {
    public $id,
    $title,
    $date,
    $reviewTitle,
    $review,
    $rating,
    $difficulty,
    $distance,
    $elevation,
    $traffic,
    $mapLoc,
    $eleLoc,
    $picFolder,
    $picArray;
}

class BaseController extends Controller {


	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function home() {
        $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );

        $mobile = false;
		if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                // these are the most common
                $mobile = true;
        } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                // these are less common, and might not be worth checking
                $mobile = true;
        }
		return View::make('home')->withMobile($mobile);
	}

	public function blog() {
        $page = get_post(5);

        return View::make('blog')->with('page', $page);
	}

	public function resume() {
		return View::make('resume');
	}

	public function development() {
        $posts = get_posts(array('category'=>3));

		return View::make('development')->with('posts',$posts);
	}

	public function test() {
		return View::make('test');
	}

	protected function bikePost($bikeStruct) {
	    // Compute rating
	    $rating = "";
	    for($i = 0; $i < 5; $i++) {
	        if ( $i < $bikeStruct->rating ) 
	            $rating .= "&#9733;";
	        else
	            $rating .= "&#9734;";
	    }

		$str = <<<EOD
            <div class="container-fluid bikepost" id="$bikeStruct->id">
                <div class="row head">
                    <div class="row titles">
                        <div class="col-md-6 col-xs-12">
                            <h1>$bikeStruct->title</h1>
                        </div>
                        <div class="col-md-6 col-xs-12" style="position: absolute; bottom: 0; right: 0;">
                            <h3 class="text-right">$bikeStruct->date</h3>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row nopadding">
                    <div id="gateway5_11_14_p" class="thumbnails">
                        <div class="col-md-7 bikecol">
                            <h2 class="text-left">$bikeStruct->reviewTitle</h2>
                            <p class="review">
                                $bikeStruct->review
                            </p>
                            <div id="{$bikeStruct->id}_p" class="thumbnails row" style="position: absolute; bottom: 0;">
EOD;
		$i = 0;
		foreach($bikeStruct->picArray as $pic) {
		    if ( $i < 4 ) {
		        $str .= <<<EOD
			        <div class="col-xs-3 nopadding">
			            <a class="fancybox-thumbs" data-fancybox-group="$bikeStruct->id" href="img/$bikeStruct->picFolder/{$pic}.jpg">
			                <img src="img/$bikeStruct->picFolder/{$pic}_s.jpg" alt="" />
			                <span class="text-content"><span>Click for more</span></span>
			            </a>
			        </div>
EOD;
		    }
		    else {
		        $str .= <<<EOD
			        <a class="fancybox-thumbs hidden" data-fancybox-group="$bikeStruct->id" href="img/$bikeStruct->picFolder/{$pic}.jpg">
			        </a>
EOD;
		    }
		    $i++;
		}

		$str .= <<<EOD
                            </div>
                        </div>
                        <div class="col-md-5 nopadding bikecol">
                            <div class="row nopadding">
                                <div class="rating">
                                    <div class="row nopadding">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-left">Rating:</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-right">$rating</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-left">Difficulty:</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-right">$bikeStruct->difficulty</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-left">Distance:</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-right">$bikeStruct->distance MI</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-left">Elevation:</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-right">$bikeStruct->elevation FT</h4>
                                        </div>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-left">Traffic:</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <h4 class="text-right">$bikeStruct->traffic</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row nopadding" style="position: absolute; bottom: 0;">
                                    <div class="col-md-12 col-centered">
                                        <!-- <h3 class="text-left">Map</h3> -->
                                        <div class="map hidden-sm hidden-xs">
                                            <img src="img/$bikeStruct->mapLoc">
                                            <img class="elevation_img" src="img/$bikeStruct->eleLoc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
EOD;
    return $str;
}

	public function ajaxMbikePics() {
		$allpics = File::allFiles('img/mbike');

		$pics = array();
		foreach($allpics as $pic) {
			if ( preg_match("@((?:([^:/?#]+):)?(?://([^/?#]*))?([^?#]*)_s\.(?:jpg|gif|png))(?:\?([^#]*))?(?:#(.*))?@",$pic, $result) ) {
				$large = explode("_s",$pic)[0] . explode("_s",$pic)[1];
				array_push($pics, array('thumb' => $result[0], 'large' => $large));
				// var_dump($large);
			}
		}

		$left = true;
		if ( ( Input::get('page')*12 + 12 ) >= count($pics) ) {
			$left = false;
		}

		return Response::json(array('results' => array_slice($pics, Input::get('page')*12,12), 'left' => $left));
	}


}