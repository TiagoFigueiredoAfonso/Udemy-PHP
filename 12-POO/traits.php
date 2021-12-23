<?php


// trait uma outra maneira de criar herança de forma mais organizada
trait viagem{

    public $custo = 1200;

    public function viagem(){
        echo "Hoje irei viajar! <br>";
    }
}

trait almoco{

    public function comida(){
        echo "Hoje irei almoçar na praia! <br>";
    }
}


class Principal{
    use viagem;
    use almoco;
}

$pessoa = new Principal;

echo "O custo da viaem é de $ ".$pessoa->custo . "<br>";
$pessoa->viagem();
$pessoa->comida();

?>