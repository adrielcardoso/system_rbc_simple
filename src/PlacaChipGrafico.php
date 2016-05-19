<?php 

class PlacaChipGrafico{

	public static $items = [
		"4,4" => 'GeForce GTX 950',
		"4,5" => 'GeForce GTX 960',
		"4,7" => 'GeForce GTX 970',
		"4,9" => 'GeForce GTX 980',
		"5" => 'GeForce GTX 980 Ti',
		"2,5" => 'Radeon HD 7850',
		"4,4" => 'Radeon HD 7870',
		"2" => 'Radeon HD 7950',
		"2,8" => 'Radeon HD 7950 Boost',
		"3" => 'Radeon HD 7970',
		"4,4" => 'Radeon HD 7970 GHz Edition',
		"5" => 'Radeon HD 7990†',
		"2" => 'Radeon HD 8350',
		"2,9" => 'Radeon HD 8470',
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