<?php 

class PlacaTaxaTrans{

	public static $items = [
		"5" => '336 GB/s',
		"4" => '288 GB/s',
		"3,8" => '264 GB/s',
		"3,5" => '240 GB/s',
		"3,3" => '224 GB/s',
		"2,9" => '153,6 GB/s',
		"2,5" => '112 GB/s',
		"2,2" => '105,6 GB/s',
		"0,5" => '28,8 GB/s',
		"0,4" => '25,6 GB/s',
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