<?php

namespace Product\calcado;

class Cor {
   
    const COR = '0,8';
    const BRANCO = '1';
    const AMARELO = '0,8';
    const AZUL = '0,5';
    const PRETO = '0,5';
    
    public $tipos = [
        self::BRANCO => 'branco',
        self::AMARELO => 'amarelo',
        self::AZUL => 'azul',
        self::PRETO => 'preto',
    ];
    
    public function parseIndex()
    {
        
    }
}
