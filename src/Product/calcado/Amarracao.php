<?php
namespace Product\calcado;

class Amarracao {
   
    const AMARRACAO = '0,2';
    const VELCRO = '0';
    const CADARCO = '1';
    const ELASTICO = '2';
    
    public $tipos = [
        self::VELCRO => 'velcro',
        self::CADARCO => 'cadarco',
        self::ELASTICO => 'elastico',
    ];
    
    public function parseIndex()
    {
        
    }
}
