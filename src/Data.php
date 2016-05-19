<?php

class Data{

	public static function placas()
	{
		$data = [];
		foreach (explode('*', file_get_contents('src/placas.csv')) as $single) {
			array_push($data, explode(';', $single));
		}

		return $data;
	}

	public static function findByGame($idPlaca)
	{	
		$data = [];
		foreach (explode('*', file_get_contents('src/placas.csv')) as $single) {
			array_push($data, explode(';', $single));
		}

		return $data[$idPlaca];
	}

}