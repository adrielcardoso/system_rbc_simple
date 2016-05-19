<?php 

class PlacaMemoria{

	public static $items = [
		"5" => '384 bits',
		"4" => '256 bits',
		"3" => '128 bits',
		"2" => '64 bits',
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