<?php

echo '<pre>';

$a = '5';
var_dump($a);

/*o operador de adição antes da variavel convete o valor contido em $a em 
inter ou float)*/
var_dump(+$a);

/*o operador de adição antes da variavel convete o valor contido em $a em 
inter negartivo ou float negativo)*/
var_dump(-$a);

echo '<hr>';

$b = '5.3';
var_dump($b);
var_dump(+$b);
var_dump(-$b);

echo '<hr>';

$b = '5.3';
var_dump($b);
var_dump(+$b);
var_dump(-$b);

echo '<hr>';

$c = $a + $b;
var_dump($c);

$c = $a - $b;
var_dump($c);

$c = $a * $b;
var_dump($c);

$c = $a / $b;
var_dump($c);

$c = $a % $b;
var_dump($c);

$c = $a ** $b;
var_dump($c);


