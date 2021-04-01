<?php

#sintase para crição de funções.

function crinadofuncao($agr1, $agr2, /* ...*/ $agrn)

{

    $imprime = "Exemplo de função.\n";

    //retornando valor.
    return $imprime;

}/* --------------------------------------------------------- */


#função para teste.

function negrito($texto)

{

    $negrito = "<strong>$texto</strong>";
    

    return $negrito;

}

echo'<hr>';

echo negrito('Não negue a ciência. Convid mata.'); 

echo'<hr>';