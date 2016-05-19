<?php


class Categoria{

	public static $items = [
		"0,1" => 'marca',
		"0,2" => 'modelo',
		"4,3" => 'chip grafico',
		"4,4" => 'clock',
		"4,5" => 'clock da memoria',
		"4,2" => 'memoria',
		"5" => 'taxa de transferencia',
		"4,8" => 'processadores',
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