<?php

    // Interfaces -> padrões que devem ser seguidos

    interface Caracteristicas {
        const nome = "Tiago";
        const dataNascimento = "01/01/2000";
        const altura = 1.85;

        public function falar();
        public function andar();
        
    }

    class Pessoa implements Caracteristicas{
        public $idade = 18;
        public function caract(){
            echo "Meu nome é " . self::nome . ", tenho " . self::altura;
        }

        public function falar(){
            echo "Meu nome é " .$this->idade . " anos <br>";
        }
        public function andar(){
            echo "Estou andando";
        }
    }

    $novaPessoa = new Pessoa;

    echo $novaPessoa->falar();
    echo $novaPessoa->caract();

?>