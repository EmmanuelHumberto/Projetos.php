<?php

echo '<pre>';

$var = 10;
var_dump($var);

$cast = (boolean) $var; // Torna-se boolean.
var_dump($cast);

$cast = (int) $var; //Torna-se int.
var_dump($cast);

$cast = (float) $var; //Torna-se float.
var_dump($cast);

$cast = (string) $var; //Torna-se string.
var_dump($cast);

$cast = (array) $var; //Torna-se array 
var_dump($cast);

$cast = (object) $var; //Torna-se object 
var_dump($cast);

$cast = (unset) $var; //Torna-se unset
var_dump($cast);

$cast = (binary) $var; //Torna-se ums estring banaria 
var_dump($cast);