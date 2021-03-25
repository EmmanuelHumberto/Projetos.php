<?php

echo'<pre>';


$ar = [

    'um',
    'dois',
    'tres',
    'quatro',
    'para', 
    'cinco'
]; 

echo'<hr>';

var_dump(each($ar));

while(list( ,$val) =  each($ar)){

   /* if ($val == 'para'){
        
        break;
        
    }*/

    //echo "$var, <br>";

}

