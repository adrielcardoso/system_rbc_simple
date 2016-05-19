<?php 

class PlacaProcessador{

	public static $items = [
		"5" => '2816',
		"4" => '2048',
		"3" => '1792',
		"2,5" => '1664',
		"2" => '1280',
		"1,7" => '1024',
		"1" => '768',
		"0,8" => '160',
		"0,2" => '80',
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