<?php

$taxa = 1.09;

function taxar($valor)

{

    global $taxa;

    $valor = $valor * $taxa;

    return $valor;

}

$preco = 25;

$comtaxa = taxar($preco);

echo '<hr>';

echo "O Preço dste livro é $preco. Com taxa $comtaxa";