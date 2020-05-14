<?php

/*Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número
*/

$a = filter_input(INPUT_GET, 'valor');
$meses = array( 1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

if($a < 1 || $a > 12){
	echo "Não existe mês enumerado como $a";
} else {
	echo "O mês número $a é $meses[$a]";
}