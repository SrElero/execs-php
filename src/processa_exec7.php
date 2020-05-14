<?php

/*Criar um algoritmos que leia um número e
imprima todos os número de 1 até ele e o seu
produto.
*/

$a = filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_NUMBER_INT);

for($aux = 1; $aux != $a;){
	$prod = $aux * $a;
	echo "$aux x $a = $prod <br>"; 
	if($aux > $a){
		$aux--;
	} else {
		$aux++;
	}
}