<?php

echo'<pre>';

$idade = 20;
$nacionalidade = 'brasileiro';

//função if avalia se a condição dentro dos pareteses é verdadeira.
if ($idade >= 18){

    echo 'mgs exibida para condição verdadeira';

    echo '<hr>';

    var_dump($idade);

}

echo '<hr>';

if ($nacionalidade == 'venezuelano'){

    echo 'mgs exibida para condição verdadeira';

    echo '<hr>';

    var_dump($nacionalidade);

} else { 

    echo 'mgs exibida para condição falsa';

    echo '<hr>';

    var_dump($nacionalidade);

   echo '<hr>';
}

if ($idade >=21){

    echo 'mgs exibida para condição verdadeira';

    echo '<hr>';

    var_dump($idade);


//Função elseif avalia outra condição caso a função if acima seja false.
} elseif ($idade >=18){

    echo 'mgs exibida para avaliação extra';

    echo '<hr>';

    var_dump($idade);

}else{

    echo 'mgs exibida para condição falsa';

    echo '<hr>';

    var_dump($idade);
}