<?php

class Pessoa{

}

class Animal{

}

$carla = new Pessoa;

$cachorro = new Animal;

if($carla instanceof Pessoa){
    echo "É uma pessoa <br>";
}else {
    echo "Não é uma pessoa <br>";
}

if($cachorro instanceof Pessoa){
    echo "Não é um animal <br>";
}else {
    echo "É um animal <br>";
}

class Humano extends Pessoa{

}
$russo = new Humano;

if($russo instanceof Pessoa){ //herdou as caracteristicas da classe pai
    echo "É também uma pessoa <br>";
}else {
    echo "Não é uma pessoa <br>";
}
?>