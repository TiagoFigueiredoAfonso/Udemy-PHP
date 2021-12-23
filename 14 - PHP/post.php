<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviar.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="marca do automóvel">
        </div>
        <div>
            <input type="checkbox" name="vermelho[]">vermelho
        </div>
        <div>
            <input type="checkbox" name="branco[]">branco
        </div>
        <div>
            <input type="checkbox" name="prata[]">prata
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>
</body>
</html>