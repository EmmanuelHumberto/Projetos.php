<?php

echo'<pre>';

#Exempllo 1

//Estrutura de repetição for  tradicional: Declaração, condição e incremnto.
for($i = 1; $i<= 10;$i++){

    echo "$i, <br>";
}

echo'<hr>';

#Exempllo 2

/*For sem condição -- loop infinito.
A condição para interromper o loop foi passada para função if */
for($i = 1; ;$i++){

    if($i > 10){


        break;
    }

    echo "$i,";
}

echo'<hr>';

#Exempllo 3

/*For sem parametro-- loop infinito.
Adeclaração está fora do for bem como o incremto.
A condição para interromper o loop foi passada para função if */

$i = 1;

for( ; ; ){

    if($i > 10){
        break;
     }

    echo "$i, <br>";

    $i++;
}

echo'<hr>';

#Exempllo 4

/* For inicializando duas variaveis, uma condição, dois incremntos e um print
sem chaves e terminado com ponto e virgula;*/

for($i = 1, $j = 0; $i <= 10; $j += $i,print "$i,",$i++ );

   
    echo "$i, <br>";

    $i++;

