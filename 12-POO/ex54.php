<?php


class Pessoa{
    public $nome;
    public $idade;

    function andar(){
        echo "Estou andando <br>";
    }
}

$eltelvina = new Pessoa;
$vilmar = new Pessoa;

$eltelvina->nome = "Maria";
$eltelvina->idade = 20;

echo $eltelvina->nome .'<br>';
echo $eltelvina->idade .'<br>';

$vilmar->nome = "Figueiredo";
$vilmar->idade = 30;
$vilmar->andar();

echo $vilmar->nome. '<br>';
echo $vilmar->idade. '<br>';
echo $vilmar->andar();

echo "O seu nome é  $vilmar->nome e sua idade é $vilmar->idade anos <br>";


?>