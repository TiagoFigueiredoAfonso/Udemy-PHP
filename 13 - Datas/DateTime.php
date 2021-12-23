<?php

// retorna um array com data/hora/local - não pode ser acessada
$data = new DateTime();

print_r($data);

// Existem 2 métodos para alterar o DateTime - modify e format

echo "<br><br>-------Formaty------- <br>";

echo $data->format('d/m/y') . "<br>";
echo $data->format('l - M - Y') . "<br>";

echo "<br>-------Modify------- <br>";
// modify é parecido com strtotime

$data->modify('+4 days'); // adc dias

echo $data->format('d/m/y') . "<br>";

$data->modify('+4 years');

echo $data->format('d/m/y') . "<br>";

?>