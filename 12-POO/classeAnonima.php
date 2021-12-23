<?php

// é uma classe dentro de uma variável, não poderá ser feita nenhum tipo de herança
$pessoa = new class(){
    public $nome = "Tiago";
    
    public function dizerNome(){
        echo "Meu nome é $this->nome <br>";
    }
};

echo $pessoa->nome . "<br>";
echo $pessoa->dizerNome();



?>