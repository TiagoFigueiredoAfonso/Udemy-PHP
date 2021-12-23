<?php

class Humano{
    public $nome;
    public $idade;

    private function falar(){
        echo "Bom dia!<br>";
    }

    public function saidaFalar(){
        $this->falar();
    }

    protected function aula(){
        echo "Aula de Matemática <br>";
    }

    public function saidaAula(){
        $this->aula();
    }
}

$tiago = new Humano;

echo $tiago->nome = "Figueiredo <br>";
echo $tiago->saidaFalar(). "<br>";

class Professor extends Humano{
    public function saidaProfessor(){
        $this->aula();
    }

} 

$maria = new Professor;

$maria->nome = "Joaquina";
$maria->saidaFalar() .'<br>' ;
echo "Meu nome é $maria->nome <br>";
echo $maria->saidaProfessor() . "<br>";
//echo $maria->saidaFalar(); // método privado a classe não herda



?>