<?php

use Carbon\Carbon;

class ParokiController extends BaseController {

	public static function get_all_paroki(){
		return Paroki::all(); 
	}
}

?>