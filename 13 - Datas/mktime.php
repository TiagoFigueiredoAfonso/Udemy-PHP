<?php

$dataNasc = mktime(02,12,33, 7, 7, 20);
//mktime hora, minut, segund, mes, dia, ano

$dataFormatada = date('d/m/Y', $dataNasc);

echo $dataFormatada . '<br>';


?>