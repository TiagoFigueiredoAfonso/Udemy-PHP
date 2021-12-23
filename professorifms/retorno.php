<?php
// inicio do exercício 6
echo '-- Exercício 6 --';
echo '<br>';
echo '<br>';
$num = $_GET['number'];
$valor = 1;

while($valor <= $num){
    if($num % $valor == 0) {
        
        $contador++;
    }
    $valor++;
       
}
if($contador == 2) {
    echo $num.' é primo';
    
}else {
    echo $num.' não é primo';
}
echo '<br>';
echo '<br>';
$nome = $_GET['texto'];
$idade = $_GET['idade'];
// fim do exercício 6

// inicio do exercício 7
echo '-- Exercício 7 --';
echo '<br>';
echo '<br>';
if($nome == null || $idade == null) {
    echo 'O preenchimento está incompleto!';
}else {
    echo 'Dados Registrados';
}
// fim do exercício 7

// inicio do exercicio 7.2

$name = $_GET['name'];
$age = $_GET['age'];
$city = $_GET['city'];
$email = $_GET['email'];

// inicio do exercicio 8

$msg = $_GET['msg'];
// fim do exercicio 8

// inicio do exercicio 9
$num = $_GET['num'];
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

if(in_array($num, $numeros)){
    echo 'verdadeiro';
    
}

// fim do exercicio 9
?>


<style>
table, td {
  border:1px solid black;
  
}
</style>
<p>-- Exerício 7.2 --</p>
<table>
    <tr>
        <td>Nome:</td>
        <td><?= $name ?></td>
    </tr>
    <tr>
        <td>Idade:</td>
        <td><?= $age ?></td>
    </tr>
    <tr>
        <td>Cidade:</td>
        <td><?= $city ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?= $email ?></td>
    </tr>
    
</table>
<p>-- Exercício 8 --</p>
    <p><?= $msg?></p>

    <p>-- Exercício 9 --</p>
    <p><?= $numeros?></p>

