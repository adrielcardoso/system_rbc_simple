<?php

class RBCAnalytic{


	public static function main($idPlaca)
	{
		$placaEntrada = Data::findByGame($idPlaca);

		$order = [];
		foreach (Data::placas() as $single) {
			array_push($order, self::parse($single, $placaEntrada));
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


	 	return [ 'index' => 
	 	    abs((
	 				// index           // valorEntrada        // valorBase
	 				($catPlacaMarca + ($placaMarcaEntrada - $placaMarca)) +
	 				($catPlacaChipGrafico + ($placaMarcaEntrada - $placaMarca)) +
	 				($catPlacaClock + ($placaMarcaEntrada - $placaMarca)) +
	 				($catPlacaClockMemoria + ($placaMarcaEntrada - $placaMarca)) +
	 				($catPlacaMemoria + ($placaMarcaEntrada - $placaMarca)) +
	 				($catPlacaTaxaTrans + ($placaMarcaEntrada - $placaMarca)) + 
	 				($catPlacaProcessador + ($placaMarcaEntrada - $placaMarca))
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