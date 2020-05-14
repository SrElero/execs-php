<?php

/*Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA.
*/

$nome = filter_input(INPUT_GET, 'nome');
$sexo = filter_input(INPUT_GET, 'sexo');
$idade = filter_input(INPUT_GET, 'idade');

if($sexo == 'f' && $idade < 25){
	echo "ACEITA";
} else {
	echo "NÃO ACEITA";
}