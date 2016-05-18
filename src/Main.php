<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Main{

	public static $game = [
			['name' => 'need for speed', 'idPlacaRecomedada' => 0],
			['name' => 'super mario br', 'idPlacaRecomedada' => 1],
			['name' => 'colin mcrae di', 'idPlacaRecomedada' => 2],
	];
    
    public function __construct() {

    	$app = new \Slim\App;
		
		$app->get('/games', function (Request $request, Response $response) {
		    $response->withJson(self::games(), 200);
		});

		$app->get('/game/{idGame}', function (Request $request, Response $response) {
		    $response->withJson(self::findGame($request->getAttribute('idGame')), 200);
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