<?php
// preenchido pelo sistema
$usuario = [
    'nome' => 'Matheus',
    'idade'=> 29,
    'profissao'=> 'Programador'
];

if($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Dados já preenchidos pelo sistema</p>
<form action="" >
    <div>
        <input type="text" name="nome"  placeholder="nome" value=<?= $nome ?>>
    </div>
    <div>
        <input type="text" name="idade"  placeholder="idade" value=<?= $idade ?>>
    </div>
    <div>
        <input type="text" name="profissao"  placeholder="profissão" value=<?= $profissao ?>>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
    
</form>

</body>
</html>