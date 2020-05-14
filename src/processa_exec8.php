<?php

/*Entrar com o número de vezes que se deseja
imprimir a palavra SOL e imprimir
*/

$a = filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_NUMBER_INT);

for($aux = 0; $aux < $a; $aux++){
	echo "SOL "; 
}