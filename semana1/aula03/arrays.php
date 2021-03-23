<?php

//tag 'pre' html para o conteudo ser pré formatado.
echo '<pre>';


#Formas básicas de se declarar e manipular array:


    #Primeira forma( usando a função array)


/*Criando array: é passado para variavel pessoas a função array, entre parenteses 
é passado cada elemento do array, contido em aspas simples e sepando cada elemento 
por virgula.*/
$chicletes = array('bolimbola','babalu', 'pinpong');


        # *Imprimindo elementos e retornando valores.


//usando a função print-r para imprimir todos os elementos contidos no array
print_r($chicletes);

//Tag html para linha divisoria
echo '<hr>';


        # *Retornando tipo de dados e quantidades de posições do elemento.


/*usando a função var_dump para imprimir todos os elementos contidos no array.
E os  seus respectivos tipos de dados.
bem como a quantidade de caracter de cada elemento contido no array*/
var_dump($chicletes);


echo '<hr>';

/* Retorna o dado no indice[1] do array. É usado após a variavel
e um inteiro é passado como pararamereto.
para que o elemento na posição 1 do array seja retornado.*/
echo $chicletes[1];  

echo '<hr>';

    # Segunda Forma( Uso de colachetes[])

/*Usando outro metodo de declaração de array, usando <Colchetes[].
dentro do colcehtes os elementos são declados entre apostrofo e separados por virgula.
Agora os indices não são interiros, mas strings. O indice da primeira posição 
do array temperatura 
é o mes de janeiro */
$temperatura = [

    'janeiro'   => 30,
    'fevereiro' => 32,
    'Março'     => 29
];  

    #Imprimindo os valores dos rarrays

        #* Uso de chaves e aspas duplas

/*String dentro de apás duplas "" será interpretada pelo php. 
Dentro de chaves é passado a posição do array[]. se não fosse um array 
o uso das chaves são desnecessarios*/

echo "A temperatura media em janeiro foi de {$temperatura['janeiro']} graus";

echo '<hr>';    

        #* Uso de apostrofo e concatenação  
        
        #Forma errada:

/*String dentro de aprotrofo '' será lida literalmente como uma string pelo php. 
não importando se foi passado como paramentro alguma varialvel dentro da string 
para ser interpretada. Nesse caso será lida como texto*/

echo 'A temperatura media em janeiro foi de {$temperatura["janeiro"]} graus';

echo '<hr>';

        #* Uso de apostrofo e concatenação 

        #Forma Correta:

/*Para o php interpretar variaveis passadas dentro da string dentro de apóstrofo 
as partes de textos e arrays terão que ser concatenadas para que possa funcionar.
para concatenar em php usa-se o ponto final.
'string' . $temperatura["janeiro"] . 'string' */

echo 'A temperatura media em janeiro foi de ' . $temperatura["janeiro"] . ' graus';