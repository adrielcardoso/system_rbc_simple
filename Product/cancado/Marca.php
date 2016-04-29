<?php

class Marca {
   
    const MARCA = '0,1';
    const NIKE = '0';
    const ADIDAS = '1';
    const PUMA = '2';
    
    public $tipos = [
        self::NIKE => 'nike',
        self::ADIDAS => 'adidas',
        self::PUMA => 'puma',
    ];
    
    public function parseIndex()
    {
        
    }
}
