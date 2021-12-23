<?php

class Pessoa{
    public $nome;
    public $idade;

    function andar(){
        echo "Estou andando <br>";
    }
}

$carlos = new Pessoa;
$maria = new Pessoa;

$carlos->nome = "andrade";
$maria->idade = 20;

echo $carlos->nome . "<br>";
echo $maria->idade ;
echo $maria->andar();

?>