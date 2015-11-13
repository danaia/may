<?php

namespace App\Http\Lib;
use Auth;

class Util 

{

	static function add($id) {

		return $id * 44 / 54;

	}

	static function gravatar() {
	
		return md5( strtolower( trim( Auth::user()->email ) ) );
	
	}
	
	
	
	
}