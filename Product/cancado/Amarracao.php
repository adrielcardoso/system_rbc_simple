<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Amarracao
 *
 * @author 5292476
 */
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
