<?php
// classe abstrata não pode ser instanciada
abstract class Teste{

    public function teste(){
        echo "Método de uma classe abstrata <br>";
    }
    abstract public function testeAbs();
}

// para acessar um método de uma classe abstrata, usa o extends 
// em outra classe

class Nova extends Teste{
    public function testeAbs(){
        echo "Teste Abs com sucesso! <br>";
    }
}
//$teste = new teste;

//Teste::teste(); -> força o método

$new = new Nova;
$new->testeAbs();
?>