<?php

/*Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes)
*/

$a = filter_input(INPUT_GET, 'valor1');
$b = filter_input(INPUT_GET, 'valor2');
$c = filter_input(INPUT_GET, 'valor3');

$ordenado = array($a, $b, $c);

arsort($ordenado);

foreach ($ordenado as $value) {
	echo "$value <br>";
}
