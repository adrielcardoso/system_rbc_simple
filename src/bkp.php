<?php
/*
   Categoria 	1
   Marca	0,1
   Cor	        0,8
   Amarra��o 	0,2
 */
$cateogoria = [
    'index' => '1',
    'values' => [
            '1' => 'sapato',
            '0,5' => 'sapat�nis',
            '0,1' => 't�nis'
    ]   
];

/*
    Marca	0,1
    Nike	0
    Adidas	1
    Puma	2
 */

$marca = [
    'index' => '0,1',
    'values' => [
            '0' => 'Nike',
            '1' => 'Adidas',
            '2' => 'Puma'
    ]
];

/*
Cor	0,8
branco	1
amarelo	0,8
azul	0,5
preto	0,1
 */

$cor = [
    'index' => '0,8',
    'values' => [
            '1' =>   'branco',
            '0,8' => 'amarelo',
            '0,5' => 'azul',
            '0,1' => 'preto'
    ]
];


/*
 * 
Amarra��o 	0,2
Velcro          0
Cadar�o         1
Elastico	2
 */

$amarracao = [
    'index' => '0,2',
    'values' => [
            '0' => 'Velcro',
            '1' => 'Cadar�o',
            '2' => 'Elastico',
    ]
];


$data = [
    0 => [
            /*sapato,Nike,branco,Velcro*/
            'cateogoria' => 'sapato',
            'marca' => 'Nike',
            'cor' => 'branco',
            'amarracao' => 'Velcro'
    ],
    1 => [
            /*sapat�nis,Nike,amarelo,Cadar�o*/
            'cateogoria' => 'sapato',
            'marca' => 'Nike',
            'cor' => 'branco',
            'amarracao' => 'Velcro'
    ],
    
    2 => [
            /*sapato,Adidas,azul,Elastico*/
            'cateogoria' => 'sapato',
            'marca' => 'Nike',
            'cor' => 'branco',
            'amarracao' => 'Velcro'
    ],
    
    3 => [
            /*t�nis,Puma,preto,Cadar�o*/
            'cateogoria' => 'sapato',
            'marca' => 'Nike',
            'cor' => 'branco',
            'amarracao' => 'Velcro'
    ],
    
    4 => [
            /*t�nis,Nike,amarelo,Cadar�o*/
            'cateogoria' => 'sapato',
            'marca' => 'Nike',
            'cor' => 'branco',
            'amarracao' => 'Velcro'
    ],  
];

# Valores de entrada
# Cliente quer comprar: Tenis da nike branco com cadar�o. */

$input = [
        /*Tenis,nike,branco,cadar�o*/
        'cateogoria' => 'sapato',
        'marca' => 'Nike',
        'cor' => 'branco',
        'amarracao' => 'Velcro'
];



