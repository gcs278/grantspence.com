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

    public function post($name) {
        Log::info($name);
        $page = get_page_by_path($name,'OBJECT','post');
        if ( $page ) {
            return View::make('dev_detail')->with('page', $page);
        }
        else {
            return "ERROR";
        }

    }

    public function resume() {
        return View::make('resume');
    }

    static public function date_compare($a, $b)
    {
        $a_custom = get_post_custom($a->ID);
        $b_custom = get_post_custom($b->ID);
        if ( array_key_exists('true_date',$a_custom) && array_key_exists('true_date',$b_custom)) {
            $t1 = strtotime(get_post_custom($a->ID)['true_date'][0]);
            $t2 = strtotime(get_post_custom($b->ID)['true_date'][0]);
            return $t2 - $t1;
        }
        return 0;
    }    

    public function development() {
        $websites = query_posts('category_name=development&category_name=website');
        $hardwares = query_posts('category_name=development&category_name=hardware');
        $apps = query_posts('category_name=development&category_name=app');

        usort($websites,array($this,'date_compare'));
        usort($hardwares,array($this,'date_compare'));
        usort($apps,array($this,'date_compare'));

        return View::make('development')
        ->with('websites',$websites)
        ->with('hardwares',$hardwares)
        ->with('apps',$apps);
    }
    

}