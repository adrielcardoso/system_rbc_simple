<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Main{

	public static $game = [
			['name' => 'Dark Souls III', 'img' => 'images/darksoul3.png', 'desenv' => 'FromSoftware	Inc', 'idPlacaRecomedada' => 0],
			['name' => 'Doom', 'img' => 'images/doom.png', 'desenv' => 'FromSoftware	Inc	Inc', 'idPlacaRecomedada' => 1],
			['name' => 'Pro Evolution Soccer 2016', 'img' => 'images/pes2016.png', 'desenv' => 'Konami Digital Entertainment', 'idPlacaRecomedada' => 2],
			['name' => 'Azure Dreams', 'img' => 'images/azuredreams.png', 'desenv' => 'Konami Digital Entertainment', 'idPlacaRecomedada' => 3],
			
			['name' => 'Need For Speed', 'img' => 'images/nfs.png', 'desenv' => 'Eletronic Arts', 'idPlacaRecomedada' => 4],
	];
    
    public function __construct() 
    {

    	$app = new \Slim\App;
		
		$app->get('/games', function (Request $request, Response $response) {
		    
		    $games = [];
		    foreach (self::games() as $single) {

		    	array_push($games, [
		    		'game' => $single,
		    		'placa' => Data::findByGame($single['idPlacaRecomedada'])
		    	]);
		    }

		    $response->withJson($games, 200);
		});

		$app->get('/game/{idGame}', function (Request $request, Response $response) {

			$game = self::findGame($request->getAttribute('idGame'));

		    $response->withJson([
		    		'game'  => $game,
		    		'placa' => Data::findByGame($game['idPlacaRecomedada']),
		    		'rbc'   => RBCAnalytic::main($game['idPlacaRecomedada'])
		    ]);
		});

		$app->run();

    }

    public static function games()
    {
		return self::$game;		
	}

	public static function findGame($idGame)
	{
		return self::$game[$idGame];
	}
}