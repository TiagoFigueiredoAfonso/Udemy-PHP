<?php

echo "Pode ser escrito por aspas dupla <br><br>";
echo "Pode também ser escrito com aspas simples <br><br>";

$idade = 20;

echo "A idade é $idade <br><br>";
echo 'A idade é $idade <br><br>'; // com simples não recebe a variável

// Checando String
echo '---Checando se uma variável é String--- <br><br>';

$frase = "Olá Mundo!";
$num  = 12;

if(is_string($frase)){
    echo "$frase é uma String<br>";
}
if(is_string($num)){
    echo "$num é uma String";
}else {
    echo "$num não é uma String<br>";
}

// is_bool

?>