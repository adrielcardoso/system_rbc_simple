<?php

class Categoria {
   
    const CATEGORIA = '1';
    const SAPATO = '1';
    const SAPATENIS = '0,5';
    const TENIS = '0,1';
    
    public $tipos = [
        self::SAPATO => 'sapato',
        self::SAPATENIS => 'sapatenis',
        self::TENIS => 'tenis',
    ];
    
    public function parseIndex()
    {
        
    }
    
}
