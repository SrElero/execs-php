<?php

/*Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados
*/

$a = filter_input(INPUT_GET, 'lado1');
$b = filter_input(INPUT_GET, 'lado2');
$c = filter_input(INPUT_GET, 'lado3');

if ($a == $b && $a == $c){
	echo "Este é um triângulo equilátero";
} elseif (($a == $b && $a != $c) || ($a == $c && $a != $b) || ($b == $c && $a != $b)) {
	echo "Este é um triângulo isósceles";
} else {
	echo "Este é um triângulo escaleno";
}