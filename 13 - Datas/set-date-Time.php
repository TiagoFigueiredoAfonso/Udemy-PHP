<?php

$data = new DateTime();

print_r($data);
echo "<br>";

// altera para qualquer data
$data->setDate(1999, 02,02);

print_r($data);
echo "<br>";

// altera as horas, min, seg

$data->setTime(05,12,10);

print_r($data);
echo "<br>";


// saida da formatação que eu quiser
echo $data->format('d/m/Y') . "<br>";


?>