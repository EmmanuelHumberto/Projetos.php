<?php

//Uso comum antes do php7 da introdução NUll_coalescing.
$nome = !empty($_GET['nome']) ? $_GET['nome'] : 'sem nome';

#Apartir do php 7 NUll_coalescing em ação.
$nome = $_GET['nome'] ?? 'sem nome';

echo '<hr>';

echo $nome;