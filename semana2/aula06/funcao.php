<?php

#sintase para crição de funções.

function crinadofuncao($agr1, $agr2, /* ...*/ $agrn)

{

    $imprime = "Exemplo de função.\n";

    //retornando valor.
    return $imprime;

}

/* --------------------------------------------------------- */


#função para teste.

function negrito($texto)

{

    $negrito = "<strong>$texto</strong>";
    

    return $negrito;

}

/* --------------------------------------------------------- */


echo'<hr>';

echo negrito('Não negue a ciência. Convid mata.'); 

echo'<hr>';

#função imc.

function imc($peso, $altura)

{

return $peso / ($altura * $peso);


}#fim imc

/* --------------------------------------------------------- */

echo imc(74, 1,95);

echo '<hr>';

//função fruteira.

function frutas($sabor, $tipo = "azedo")

{

    return "fazendo um suco de <strong>$sabor</strong> $tipo";

}#fim frutas

/* --------------------------------------------------------- */

 echo frutas('abacate'), '<br>';

 echo '<hr>';

 echo frutas('morango','refrescante'), '<br>';

