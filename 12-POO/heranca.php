<?php


class Pessoa{
    public $nome = "Tiago";

    public function falar(){
        echo "Olá Mundo!";
    }
    private function correr(){
        echo "Estou correndo! <br>";
    }

    public function corre(){ // saida do private
        $this->correr();
    }

    protected function cantar(){
        echo "Estou cantando! <br>";
    }
    public function canta(){ // saida do protected
        $this->cantar();
    }


}

$pessoa = new Pessoa;
echo "--Instanciado-- <br>";
echo "O nome da pessoa é: ".$pessoa->nome ."<br>";
echo $pessoa->corre();
echo $pessoa->canta();

class Humano extends Pessoa{ // Na Herança eu acesso o protected, o private não

    public function canta(){ // saida do protected
        $this->canta(); // a visibilidade não está funcionando
    }
}

$pessoa2 = new Humano;
echo "<br>--Herança--";
echo "<br>O nome do humano é: " .$pessoa2->nome ."<br>";
echo $pessoa2->falar()."<br>";
echo $pessoa->corre();
echo $pessoa->canta();
echo $pessoa->corre();




?>