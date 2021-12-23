<?php

class Carro{
    public $marca;
    public $cor;
    public $ano;

    function __construct($marca, $cor, $ano){
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }
    
}

$fusca = new Carro("Fuka", "Vermelho", "1986");

echo "O meu carro é um $fusca->marca e sua cor é $fusca->cor <br>";

class Cachorro{
    public $nome;
    public $raca;

    function __construct($nome, $raca){
        $this->nome = $nome;
        $this->raca = $raca;
    }
    public function retorno(){
        echo "O nome do cachorro é $this->nome e sua raça é $this->raca <br>";
    }
}

$pastor = new Cachorro("Blitz", "Pastor");

echo $pastor->retorno();


?>