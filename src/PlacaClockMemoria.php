<?php 

class PlacaClockMemoria{

	public static $items = [
		"4,6" => '6,6 GHz',
		"5" => '7 GHz',
		"2,8" => '4,8 GHz',
		"3" => '5 GHz',
		"3,6" => '5,5 GHz',
		"4" => '6 GHz',
		"1,5" => '1,8 GHz',
		"2" => '3,2 GHz',
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