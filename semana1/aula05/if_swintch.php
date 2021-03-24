<?php

$i = 3;

if($i == 0){

    echo '$i igual a zero';

}elseif ($i == 1){

    echo '$i igual a zero';

}elseif ($i == 2){

    echo '$i igual a zero';

}else{

    echo '$i igual tres';
    
}

echo '<hr>';

switch($i){

    case 0:
        echo '$i igual a Zero';
        break;
    case 1:
        echo '$i igual a Um';
        break;
    case 2:
        echo '$i igual a Dois';
        break;
    default:
        echo '$i diferente das opções';
        break;
}