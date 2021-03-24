<?php

$erro = NULL;
$advertencia  = 'cuidado';

?>

<!-- Comentario em html //-->




<!-- if simples  //-->

<!--Nesse formato de if não usamos as chaves, usamos dois pontos: para exibir intruções 
caso if seja true //-->

<!-- a função isset irá verificar se há algum valor definido para a veriavel $erro 
neste caso: como a varialvel erro foi atribiodo NUll a função retornará false. //-->
<?php if(isset($erro)):?>

    <!-- Caso a expressão seja verdadeira e houver um erro irá ser impresso qual foi o erro
    dentro de um paragrfo <p></p> dentro de uma <div></div>  //-->
    <div><p><?=$erro?></p></div>

<!-- endif fecha o bloco if //-->
<?php endif ?>

<hr>

<!-- if else //-->

<?php if(isset($erro)):?>

    <!-- Se true execulta o codido abaixo //-->
    <div><p><?=$erro?></p></div>

    <!-- caso false execulta o codido abaixo //-->
    <?php else :?>

    <div><p>Sucesso</p></div>

<?php endif ?>

<hr>

<!-- if 
     elseif 
     else
 //-->

 <?php if(isset($erro)):?>

    <div><p><?=$erro?></p></div>

    <?php elseif(isset($advertencia)):?>

    <div><p><?=$advertencia?></p></div>

    <?php else :?>

    <div><p>Sucesso</p></div>

<?php endif ?>



