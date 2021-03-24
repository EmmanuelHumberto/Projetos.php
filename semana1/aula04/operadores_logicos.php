<?php

echo '<pre>';

$a = false;
$b = true;
$c = true;


/* o operador 'AND na expessão '[$a and $b] 
=> retorna false*/
var_dump(($a && $b));

echo '<hr>';

/* o operador 'OR na expessão '[$a or $b] 
=> retorna true*/
var_dump(($a || $b));

/* o operador 'OR na expessão '[$a or $c] 
=> retorna true*/
var_dump(($a || $c));

echo '<hr>';

/* o operador 'XOR na expessão '[$a xor $b] 
=> retorna true*/
var_dump(($a xor $b));

/* o operador 'XOR na expessão '[$a xor $c] 
=> retorna true*/
var_dump(($a xor $c));


echo '<hr>';

/* o operador '! na expessão '[!$a] 
=> retorna true*/
var_dump((!$a));