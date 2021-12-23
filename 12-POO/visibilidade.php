<?php

class Carro{

    public $rodas = 4;
    private $cor = "Vermelho";

    function getCor(){ // só o get retorna, mas privado não será alterado
        return $this->cor;
    }
    
}

// alterou o objeto a partir de outro
class Mecanico{

    public function alterarRodas($recebeObjeto){
        $recebeObjeto->rodas = 6;
    }

    public function alterarCor($recebeObjeto){
        $recebeObjeto->cor = "Branco";
    }

    public function alterarCor2($recebeObjeto){
        $recebeObjeto->cor = "verde";
    }
}

$fiat = new Carro;

echo "Quantidade: ". $fiat->rodas . " rodas.<br>";
echo "Cor do carro: ". $fiat->getCor() . "<br>";



$maria = new Mecanico;

$maria->alterarRodas($fiat); // alterou por outro objeto

echo $maria->alterarRodas($fiat);

echo "Nova quantia de rodas: ".$fiat->rodas . " unidades.<br>";

$maria->alterarCor($fiat);
echo "Nova cor do carro: " .$fiat->cor . "<br>";





?>