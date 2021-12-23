<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
          border:1px solid black;
        }
        </style>
    <title>Document</title>
</head>
<body>
    <?php

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);



function busca($valor){
    if(in_array($valor, $numeros)){
        return true;
        
    }
}

echo ''.busca(2);


    
    
    ?>
</body>
</html>