<?php


class Carro{
    public $cor;
    public $velocidadeMaxima;

       
    function setVelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        return $this->velocidadeMaxima;
    }

    function modelo(){
        return "2004";
    }

    function Invocar(){ // retorna a chamada de outro método
        return strtoupper($this->modelo());
    }
}

$fusca = new Carro;
$fusca->cor = "Vermelho";
$fusca->setVelocidadeMaxima(100);

echo 'A velocidade máxima é: '.$fusca->getVelocidadeMaxima() . ' km/h';

//echo "A cor do carro é $fusca->cor e sua velocidade é: $fusca->getVelocidadeMaxima";

echo "<br>Ano: ". $fusca->Invocar();

?>