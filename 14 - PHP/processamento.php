<?php

// isset tratativa caso o campo esteja vazio
if(isset($_GET['nome'])){
$nome = $_GET['nome'];
$idade = $_GET['idade'];
}else {
    $nome = "'Null'";
    $idade = "'Null'";
}


?>

<p>O seu nome é <?= $nome ?>, e sua idade é <?= $idade?></p>