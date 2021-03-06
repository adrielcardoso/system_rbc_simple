<?php 

class PlacaClock{

	public static $items = [
		"4,7" => '1.024 MHz',
		"5" => '1.127 MHz',
		"4,8" => '1.050 MHz',
		"4,9" => '1.126 MHz',
		"4,4" => '1.000 MHz',
		"3,8" => '860 MHz',
		"4,7" => '1 GHz',
		"3" => '800 MHz',
		"3,6" => '850 MHz',
		"4" => '925 MHz',
		"2" => '400 MHz',
		"2,7" => '775 MHz',
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