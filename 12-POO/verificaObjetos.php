<?php

class Pessoa{

    public function falar(){
        echo "Eu estou falando";
    }
}

$tiago = new Pessoa;

// verifica se a variável é ou não um objeto instanciado
if(is_object($tiago)){
    echo "É um objeto <br>";
}else {
    echo "Não é um objeto <br>";
}

// qual a classe do objeto?

echo get_class($tiago) . "<br>";

// se o método existe dentro do objeto

if(method_exists($tiago, "falar")){
    echo "O método existe <br>";
}else {
    echo "Não existe <br>";
}

if(method_exists($tiago, "correr")){
    echo "O método existe";
}else {
    echo "Não existe";
}
?>