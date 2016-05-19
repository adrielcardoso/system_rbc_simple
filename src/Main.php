<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Main{

	public static $game = [
			['name' => 'need for speed', 'idPlacaRecomedada' => 0],
			['name' => 'super mario br', 'idPlacaRecomedada' => 1],
			['name' => 'colin mcrae di', 'idPlacaRecomedada' => 2],
			['name' => 'colin mcrae di', 'idPlacaRecomedada' => 3],
			['name' => 'colin mcrae di', 'idPlacaRecomedada' => 4],
			['name' => 'colin mcrae di', 'idPlacaRecomedada' => 5],
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