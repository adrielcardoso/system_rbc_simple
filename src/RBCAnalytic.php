<?php

class RBCAnalytic{

	public static $final = 2;

	public static function main($idPlaca)
	{
		$placaEntrada = Data::findByGame($idPlaca);

		$order = [];
		foreach (Data::placas() as $single) {

			$parse = self::parse($single, $placaEntrada);

			if($parse['index'] > self::$final){
				continue;
			}

			array_push($order, $parse);
		}

		return $order;
	}

	 public static function parse($placa, $placaEntrada)
	 {
	 	$catPlacaMarca = Categoria::findWeight('marca');
	 	$placaMarca = PlacaMarca::findWeight($placa[0]);
	 	$placaMarcaEntrada = PlacaMarca::findWeight($placaEntrada[0]);

	 	$catPlacaChipGrafico = Categoria::findWeight('chip grafico');
	 	$placaChipGrafico = PlacaChipGrafico::findWeight($placa[1]);
	 	$placaChipGraficoEntrada = PlacaChipGrafico::findWeight($placaEntrada[1]);

	 	$catPlacaClock = Categoria::findWeight('clock');
	 	$placaClock = PlacaClock::findWeight($placa[2]);
	 	$placaClockEntrada = PlacaClock::findWeight($placaEntrada[2]);

	 	$catPlacaClockMemoria = Categoria::findWeight('clock da memoria');
	 	$placaClockMemoria = PlacaClockMemoria::findWeight($placa[3]);
	 	$placaClockMemoriaEntrada = PlacaClockMemoria::findWeight($placaEntrada[3]);

	 	$catPlacaMemoria = Categoria::findWeight('memoria');
	 	$placaMemoria = PlacaMemoria::findWeight($placa[4]);
	 	$placaMemoriaEntrada = PlacaMemoria::findWeight($placaEntrada[4]);

	 	$catPlacaTaxaTrans = Categoria::findWeight('taxa de transferencia');
	 	$placaTaxaTrans = PlacaTaxaTrans::findWeight($placa[5]);
	 	$placaTaxaTransEntrada = PlacaTaxaTrans::findWeight($placaEntrada[5]);

	 	$catPlacaProcessador = Categoria::findWeight('processadores');
	 	$placaProcessador = PlacaProcessador::findWeight($placa[6]);
	 	$placaProcessadorEntrada = PlacaProcessador::findWeight($placaEntrada[6]);

	 	// print_r($placaMarca);die;
	 	// print_r($catPlacaMarca * ($placaMarcaEntrada - $placaMarca));die;

	 	// print_r((
	 	// 			// index           // valorEntrada        // valorBase
	 	// 			($catPlacaMarca * ($placaMarcaEntrada - $placaMarca)) +
	 	// 			($catPlacaChipGrafico * ($placaChipGraficoEntrada - $placaChipGrafico)) +
	 	// 			($catPlacaClock * ($placaClockEntrada - $placaClock)) +
	 	// 			($catPlacaClockMemoria * ($placaClockMemoriaEntrada - $PlacaClockMemoria)) +
	 	// 			($catPlacaMemoria * ($placaMemoriaEntrada - $PlacaMemoria)) +
	 	// 			($catPlacaTaxaTrans * ($placaTaxaTransEntrada - $placaTaxaTrans)) + 
	 	// 			($catPlacaProcessador * ($placaProcessadorEntrada - $placaProcessador))
	 	// 	));die;

	 	return [ 'index' => 
	 	     ((
	 				// index           // valorEntrada        // valorBase
	 				($catPlacaMarca * ($placaMarcaEntrada - $placaMarca)) +
	 				($catPlacaChipGrafico * ($placaChipGraficoEntrada - $placaChipGrafico)) +
	 				($catPlacaClock * ($placaClockEntrada - $placaClock)) +
	 				($catPlacaClockMemoria * ($placaClockMemoriaEntrada - $PlacaClockMemoria)) +
	 				($catPlacaMemoria * ($placaMemoriaEntrada - $PlacaMemoria)) +
	 				($catPlacaTaxaTrans * ($placaTaxaTransEntrada - $placaTaxaTrans)) + 
	 				($catPlacaProcessador * ($placaProcessadorEntrada - $placaProcessador))
	 		) / 
	 		(
	 			$catPlacaMarca +
	 			$catPlacaChipGrafico +
	 			$catPlacaClock +
	 			$catPlacaClockMemoria +
	 			$catPlacaMemoria +
	 			$catPlacaTaxaTrans +
	 			$catPlacaProcessador
	 		)), 'placa' => $placa];
	 } 	

}