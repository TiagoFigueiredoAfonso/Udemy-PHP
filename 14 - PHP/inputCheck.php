<?php

if(isset($_POST['ingrediente'])) {
    $ingredientes = $_POST['ingrediente'];

    print_r($ingredientes);
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
    <form action="" method="post">

    <div>
    <input type="checkbox" name="ingrediente[]" value="tomate"> tomate
    </div>
    <div>
    <input type="checkbox" name="ingrediente[]" value="alface"> alface
    </div>
    <div>
    <input type="checkbox" name="ingrediente[]" value="cebola"> cebola
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>

    </form>
</body>
</html>