<?php

//Exercício 08

$nome = "Fulano";
$numero = 12;
$frase = 'Olá Mundo!';

echo "O nome é: $nome , o número é: $numero, e a frase do dia é: $frase";

//Exercício 09 - Soma de variáveis

$valor1 = 12;
$valor2 = 4;

echo "resultado: ", $valor1 + $valor2;

//Variável da Variável

$nome = 'Marta';

$$nome = 'José';

echo $$nome;
echo $nome;

//Variável por Referência

$a = 2;

$b =& $a;

echo $a;
echo "<br>";
echo $b;

$a = 20;
$b =& $a;

echo $a;
echo "<br>";
echo $b;


