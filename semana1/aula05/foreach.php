<?php

echo'<pre>';

$biscoitos = [

    'salpet',
    'Maria',
    'piraque',
    'passatempo'
];

foreach ($biscoitos as $bis){

    echo "$bis<br>";

    echo'<hr>';

}


foreach ($biscoitos as $chave => $bis){

    echo "$chave - $bis<br> ";

}