<?php

    $method = $_SERVER['REQUEST_METHOD'];

       if(isset($_POST['nome'])){

           $nome = $_POST['nome'];
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
    <?php
        if($method == 'GET'):
    ?>
    <form action="autoprocesso.php" method="post">
        <div>
            <input type="text" name="nome">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    else:
    ?>
    <p>o seu nome é <?= $nome ?></p>

    <?php
    endif;
    ?>
</body>
</html>