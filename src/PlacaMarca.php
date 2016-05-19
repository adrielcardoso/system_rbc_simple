<?php 

class PlacaMarca{

	public static $items = [
		"3" => 'NVIDIA',
		"2" => 'AMD',
	];

	public static function findWeight($namePlaca)
	{
		foreach (self::$items as $weight => $single) {
			if(trim(strtolower($single)) == trim(strtolower($namePlaca))){
				return $weight;
			}
		}
	}
}