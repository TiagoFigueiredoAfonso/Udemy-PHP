<?php

// diferença entre datas, crie 2 datas

$data1 = new DateTime(); 
$data2 = new DateTime();

// 1 é atual, a 2 eu vou alterar

$data2->setDate(1999, 10, 01);

print_r($data1);
echo "<br>";

print_r($data2);
echo "<br>";

$diferencaData = $data1->diff($data2);

print_r($diferencaData);
echo "<br>";

echo $diferencaData->format("%a days");
echo "<br>";




?>