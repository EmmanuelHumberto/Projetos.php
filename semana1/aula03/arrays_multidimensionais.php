<?php

//criando array multidimensional: Uma arrey dentro de outros arrays. (matrix)

    $temperatura = [
        
        '2020' => [
            'janeiro'   => 30,
            'fevereiro' => 32,
            'Março'     => 29
        ],
        '2030' => [
            'janeiro'   => true,
            'fevereiro' => true,
            'Março'     => false
        ],
        '2040' => [
            'janeiro'   => "frio",
            'fevereiro' => "quente",
            'Março'     => 'fresco'
        ]
    ];  

    // Nesse caso é passado todas as dimensões do array pois se trata de uma matrix 
    //$temperatura['2020']['janeiro']
    echo "janeiro de 2020 foi de {$temperatura['2020']['janeiro']} graus<br>";

    echo '<hr>';

    echo '<pre>';

var_dump($temperatura);