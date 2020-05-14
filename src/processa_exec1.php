<?php
/*Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5*/

$var1 = filter_input(INPUT_GET, 'valor1');
$var2 = filter_input(INPUT_GET, 'valor2');

$adicao = $var1 + $var2;

if($adicao > 20){
	$adicao += 8;
} else {
	$adicao -= 5;
}

echo "$adicao";