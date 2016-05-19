<?php


class PlacaModelo{

	public $items = [
		"5" => 'Gigabyte',
		"4" => 'EVGA',
		"3" => 'MSI',
		"2" => 'Asus',
		"1" => 'Zotac',
		"0,5" => 'XFX',
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