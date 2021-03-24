<?php

echo '<pre>';


/* Operador == faz comparações 


se [int 0] é igual a [string 'a'] => Retorna true */
var_dump(0 == 'a');

//se [int 1] é igual a [string '01'] => Retorna true */
var_dump('1' == '01');

//se [int 10] é igual a [string '1e1'] => Retorna true */
var_dump('10' == '1e1');

//se [int 100] é igual a [string '1e2'] => Retorna true */
var_dump(100 == '1e2');

echo '<hr>';

/*Operador <=> faz 3 comparações
   < menor, 
   = igual,
   > maior
*/

#Intergers

/*[int 1] == [int 1] => retorna zero */
var_dump(1 <=> 1);

/*[int 1] == [int 2] => retorna -1 */
var_dump(1 <=> 2);

/*[int 2] == [int 1] => retorna 1 */
var_dump(2 <=> 1);

echo '<hr>';

#Floats

/*[int 1.5] == [int 1.5] => retorna zero */
var_dump(1.5 <=> 1.5);

/*[int 1.5] == [int 2.5] => retorna -1 */
var_dump(1.5 <=> 2.5);

/*[int 2.5] == [int 1.5] => retorna 1 */
var_dump(2.5 <=> 1.5);

echo '<hr>';