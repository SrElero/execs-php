<?php

/* Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes
*/

$var = filter_input(INPUT_GET, 'valor');
$div10 = false;
$div5 = false;
$div2 = false;

if($var % 10 == 0){
	$div10 = true;
	$div5 = true;
	$div2 = true;
} elseif ($var % 5 == 0) {
	$div5 = true;
} elseif ($var % 2 == 0) {
	$div2 = true;
}

if($div10){
	echo "O número $var é divisivel por 10 <br>";
} else {
	echo "O número $var NÃO é divisivel por 10<br>";
}

if($div5){
	echo "O número $var é divisivel por 5<br>";
} else {
	echo "O número $var NÃO é divisivel por 5<br>";
}

if($div2){
	echo "O número $var é divisivel por 2<br>";
} else {
	echo "O número $var NÃO é divisivel por 2<br>";
}

