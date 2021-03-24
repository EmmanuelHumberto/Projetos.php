<?php

echo '<pre>';

$a = 1;

echo $a, '<br>';

echo '<hr>';

/*Com o operador ++ a esquerda da variavel pré incremento 
é increntado 1 e retorna o valor */
echo ++$a, '<br>';

/*Com o operador a ++ direita da variavel pós incremento 
retorna o valor e depois é incremntado 1 */
echo $a++, '<br>';

var_dump($a);


echo '<hr>';

/*Com o operador -- a esquerda da variavel pré decremento 
é decrentado 1 e retorna o valor */
echo --$a, '<br>';

/*Com o operador a -- direita da variavel pós decremento 
retorna o valor e depois é decremntado 1 */
echo $a--, '<br>';

var_dump($a);


echo '<hr>';

echo $a, '<br>';