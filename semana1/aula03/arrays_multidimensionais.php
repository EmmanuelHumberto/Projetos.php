<?php

//criando array multidimensional: Uma arrey dentro de outros arrays. (matrix)

    $temperatura = [
        
        '2020' => [
            'janeiro'   => 30,
            'fevereiro' => 32,
            'Março'     => 29
        ],
        '2030' => [
            'janeiro'   => 30,
            'fevereiro' => 32,
            'Março'     => 29
        ],
        '2040' => [
            'janeiro'   => 30,
            'fevereiro' => 32,
            'Março'     => 29
        ]
    ];  

    echo "janeiro de 2020 foi de {$temperatura['2020']['janeiro']} graus<br>";