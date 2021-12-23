<?php
$validacoes = [];

if(count($_POST) > 0){

    if($_POST['nome'] === ""){
    $validacoes[] = "Por Favor, preencha o seu nome";
    }

    if($_POST['email'] === ""){
        $validacoes[] = "Por favor, preecha o seu nome";
    }

    if($_POST['senha'] === ""){
        $validacoes[] = "Por favor, sua digite senha!";
    }

    if($_POST['senha'] != $_POST['confirmacao']){
        $validacao[] = "As senhas não conferem";
    }
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
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao):?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="validacaoForm.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="nome">
        </div>
        <div>
            <input type="email" name="email" placeholder="email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>