<?php

//$valor = $_GET['num'];

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
   
print_r($numeros);

function busca($valor){
    for($i = 0; $i < $numeros; $i++) {
        if($valor == $numeros[$i]){
            $saida = $numeros[$i];
            break;
        }else {
            break;
        }
    }
}
    if($saida == $valor){
    echo 'Valor Encontrado';
    }
    else{
        echo 'Valor não encontrado';
    }

$valor = 11;
busca($valor);

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function valor($valor1){
    if(in_array($valor1, $numeros)){
        echo 'verdadeiro';
        
    }
}

valor(2);
   
   



?>