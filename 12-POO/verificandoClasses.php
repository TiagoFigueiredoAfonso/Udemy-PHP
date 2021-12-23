<?php

class Pessoa{
    public $nome;
    public $idade;

    public function acordar(){}
}

// verifica se a classe existe
if(class_exists("Pessoa")){
    echo "A classe existe <br>";
}else {
    echo "A classe não existe";
}

// imprime as variáveis do classe

print_r(get_class_vars("Pessoa"));

// imprime os métodos da classe
echo "<br>";
print_r(get_class_methods("Pessoa"));

?>