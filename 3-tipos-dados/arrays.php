<?php

$array = [1, 2, 3];

// para imprimir array usa-se o print_r
print_r($array);

echo "<br>";
echo "$array[0]"; // echo acessa um índice específico
echo "<br>";

echo "--Array Associativo--<br>";
$ar = ['nome'=> 'Maria', 'idade'=> 32];

print_r($ar);
echo "<br>";
echo $ar['nome'];
echo "<br><br>";

echo "-----Exercício-----<br>";
//crie um array associativo e imprima duas características

$as = ['nome'=> 'Fiat', 'ano'=> '1998', 'cor'=> 'Branco' ];
echo "<br>";
print_r($as);
echo "<br>";
echo $as['nome'];
echo "<br>";
echo $as['cor'];

// salvando as informações do Array em Variável para imprimir com echo

$nomeCarro = $as['nome'];
$corCarro = $as['cor'];
echo "<br>";
echo "O modelo do carro é: $nomeCarro, e a cor é: $corCarro";
echo "<br><br>";

echo "--- Desafio ---<br>";

$pessoa = ['nome'=> 'Marta', 'idade'=> 19, 'filhos'=> true, 'altura' => 66];


if($pessoa['idade'] >= 18){
    echo "Maior de idade";
}else {
    echo "Menor de idade";
}

?>