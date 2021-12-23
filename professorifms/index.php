<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
        body {
            background: #0012;
        }
        input {
            margin: 2px;
        }
    </style>
    <title>Exercícios web - 2</title>
</head>
<body>

<?php 
echo "<h3>Lista Exercícios</h3>";
echo "<p><b>// Exercício 1
//criar função php para calcular média do aluno (nome e três notas);
</b></p>";

function mediaAluno($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

echo "A média: " . mediaAluno(6, 6, 6);


echo "<p><b>// Exercício 2
//criar função para calcular a área de um quadrado;</b></p>";

function areaQuadrado ($altura, $largura) {
    return $altura * $largura;
}

echo "Área do quadrado: ". areaQuadrado(4, 4);

echo "<p><b>// Exercício 3
// entrada: um número; saída: tabuada deste número;</b></p>";

function tabuada ($valor) {
    for($i = 0; $i <= 10; $i++){
        echo $valor .'X' . $i . '=' . ($valor * $i); 
        echo '<br>';
    }
  
}

tabuada(3);
echo "<p><b>// Exercício 4
// converter graus Celsius para Fahrenheit;</b></p>";

function conversorCelsius ($grau) {
    return $grau * 1.8 + 32;
}

echo $grau . 'Celsius equivale a '. conversorCelsius(37) . ' Fahrenheit';

echo '<p><b>// Exercício 5
// cálculo de IMC (informar peso e altura, consultar tabela);
</b></p>';

function imc($peso, $alt){
    $imc = $peso / ($alt * $alt);

    if($imc < 18.5){
        echo 'Abaixo do Peso';
    }else if ($imc > 18.4 && $imc < 25) {
        echo 'Peso normal';
    }else if($imc > 24.9 && $imc < 30) {
        echo 'Sobrepeso';
    }else if($imc > 29.9 && $imc < 35) {
        echo 'Obesidade Grau I';
    }else if($imc > 34.9 && $imc < 40) {
        echo 'Obesidade Grau II';
    }else {
        echo 'Obesidade Grau III ou Mórbida';
    }
}

imc(85, 1.85);

?>

<p><b>// Exercício 6
// Receber um número de um form html via GET e informar se ele é número primo ou não;</b></p>

<form action="retorno.php" method="get">
    Digite o valor: <input type="number" name="number" id="number" required>
    <input type="submit" value="Enviar">
</form>

<p><b>// Exercício 7
// Criar uma página que vai receber dois valores. Se um destes valores estiver vazio, exibir mensagem.
</b></p>

<form action="retorno.php" method="get">
    Nome: <input type="text" name="texto" id="texto">
    Idade: <input type="number" name="idade" id="idade">
    <input type="submit" value="Enviar">
</form>

<p><b>// Exercício 7.2
// Criar uma tabela com os valores enviados</b></p>

<form action="retorno.php" method="get">
    Nome: <input type="text" name="name" id="name" padding: 10px><br>
    Idade: <input type="number" name="age" id="age"><br>
    Cidade: <input type="text" name="city" id="city"><br>
    Email: <input type="email" name="email" id="email"><br>
    <input type="submit" value="Enviar">
</form>

<p><b>// Exercício 8
// Criar uma página HTML que envie um texto via GET para um sript PHP que vai exibir este texto;</b></p>


<form action="retorno.php" method="get">
Digite aqui seu texto:
<input type="text" name="msg" id="msg">
<input type="submit" value="Enviar">
</form>

<p><b>// Exercício 9
//criar uma função PHP que verifica se um número existe dentro de um array. Não utilizar funções prontas como array_search() ou in_array();</b></p>

<form action="retorno.php" method="get">
Digite o valor: <input type="number" name="num" id="num">
<input type="submit" value="Enviar">
</form>

</body>
</html>