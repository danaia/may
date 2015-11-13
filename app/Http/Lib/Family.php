<?php

namespace App\Http\Lib;

class Family 

{

	protected static $famMembers = [

	"wife" => "sheri",
	"son1" => "daniel",
	"son2" => "leo",
	"me" => "dana"

	];
	
	public static function getFam() 
	{
		return array_keys(static::$famMembers);
	}
	
}