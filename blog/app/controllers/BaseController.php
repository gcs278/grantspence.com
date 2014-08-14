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
		return View::make('home');
	}

	public function mountBike() {
		$burkeFarm = new bikeStruct();

		$burkeFarm->id = "burkefarm_5_31_14";
		$burkeFarm->title = "Burke Farm";
		$burkeFarm->date = "May 31st, 2014";
		$burkeFarm->review = "First off, keep in mind you have buy a $25 dollar yearly pass in order to ride. The riding itself was alright. 
		                    Decently smooth, but just flat. It had some dips and turns, but overall it was just uneventful for me. I am used 
		                    to riding up a mountain then down that mountain.
		                    </p>
		                    <p>
		                                Probably will not ride again. If you are looking for a good, easy, and safe place to ride, come on out.";
		$burkeFarm->reviewTitle = "Ehhhh";
		$burkeFarm->rating = 2;
		$burkeFarm->difficulty = "Beginner";
		$burkeFarm->distance = "3.31";
		$burkeFarm->elevation = "453";
		$burkeFarm->traffic = "Minimal";
		$burkeFarm->mapLoc = "mbike/burke_map.png";
		$burkeFarm->eleLoc = "mbike/burke_el.png";
		$burkeFarm->picFolder = "mbike/burke_5_31_14";
		$burkeFarm->picArray = array("IONX0014","IONX0013","IONX0003","IONX0001","2014-05-31_11.40.13",
		    "2014-05-31_11.40.05","2014-05-31_11.40.03","2014-05-31_11.34.10");

		$bikePosts = $this->bikePost($burkeFarm);

		$gateway = new bikeStruct();

		$gateway->id = "gateway_5_31_14";
		$gateway->title = "Gateway Trail";
		$gateway->date = "May 12th, 2014";
		$gateway->review = "The trail starts out awesome with a gazeebo and bench onlooking the mountain. Gateway is nearly impossible to ride up. Only very experienced and in-shape riders can go up without stopping. I rode about 50% of the time up.
		                    </p>
		                    <p>
		                                Going down is much better. A steep drop, but not too smooth so you won't be able to gain much speed. Guys race down it. My time was about 8 minutes, but I know a guy that gets down in 5.";
		$gateway->reviewTitle = "A Great Experience";
		$gateway->rating = 4;
		$gateway->difficulty = "Advanced";
		$gateway->distance = "7.31";
		$gateway->elevation = "1234";
		$gateway->traffic = "Minimal";
		$gateway->mapLoc = "mbike/gateway_map.png";
		$gateway->eleLoc = "mbike/gateway_el.png";
		$gateway->picFolder = "mbike/gateway_5_11_14";
		$gateway->picArray = array("2014-05-11_12.32.21","2014-05-11_12.32.31","2014-05-11_12.34.00","2014-05-11_12.34.07","2014-05-11_13.25.28",
		    "2014-05-11_13.38.37","2014-05-11_13.53.52","2014-05-11_13.54.08");

		$bikePosts .= $this->bikePost($gateway);

		return View::make('mountBike')->with('bikePosts',$bikePosts);
	}

	public function resume() {
		return View::make('resume');
	}

	public function development() {
		return View::make('development');
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

}