<?php

echo Null;

$nome = Null;

if(is_null($nome)){
    echo "É nulo";
}

$nome = "nome";
echo "<br>";

if(is_null($nome)){
    echo "É nulo";
}else {
    echo "Não é nulo";
}