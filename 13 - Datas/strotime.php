<?php

// string em data, alterando o date

// somou dias
$dia = strtotime('5 days');

echo $dia . "<br>";

$dataAtual = date('d/m/Y', $dia);

echo $dataAtual . "<br>";

// meses
$mes = strtotime('2 months');

$dataAtual = date('d/m/Y', $mes);

echo $dataAtual . "<br>";

// anos
$ano = strtotime('2 years');

$dataAtual = date('d/m/Y', $ano);

echo $dataAtual . '<br>';

?>