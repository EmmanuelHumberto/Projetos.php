<?php



/*Declara os tipo de dados que serão passados como argumentos para a função imc.
Caso o tipo de dado informado não sejam os dados declarados a função não será execultada.
*/

declare(strict_type=1);

#função imc.

function imc(int $peso, float $altura)

{

return $peso / ($altura * $peso);


}#fim imc

/* --------------------------------------------------------- */

//Atribuindo valor de dado conforme os tipos declarados.
echo imc(120, 1.60);

echo '<hr>';

/*Atribuindo valor de dado conforme os tipos declarados.
não será execultado o primeiro tipo foi passado como array enquanto o dado correto
a ser passado é do tipo int*/
echo imc([120], 1.60);

echo '<hr>';