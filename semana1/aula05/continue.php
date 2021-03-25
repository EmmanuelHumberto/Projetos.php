<?php

$i = 0;

/*continue é utilizado em estruturas de laço para pular o resto da iteração atual, 
e continuar a execução na validação da condição e, então, iniciar a próxima iteração.*/

echo'<pre>';

echo "$i, int inicializado ";

echo'<hr>';

while($i++ < 5){
    
    echo'(1) - loop<br>';

    echo'<hr>';

    echo "$i, int incrementado primeiro loop";

    echo'<hr>';

    while(1){

        echo' (2) - loop(loop)<br>';

        echo'<hr>';

        echo "$i, ";

        echo'<hr>';

        while(1){

            echo'  (3) - loop(loop(loop))<br>';

            echo'<hr>';

            echo "$i,";

            echo'<hr>';

            /*O continue aceita um argumento numérico opcional que diz quantos níveis 
            de laços aninhados deve pular. O valor padrão é 1, saltando para o final 
            do laço atual.*/
            continue 3;

         }
                  
         echo'texto não irá aparecer <br>';
     }

     echo'texto não irá aparecer <br>';
}


