<?php

echo "Crie 3 Floats: <br>";
$a = 1.23;
$b = 6.64;
$c = "4.32";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";

if(is_float($a)){
    echo "$a É float<br>";
}
if(is_float($b)){
    echo "$b É float<br>";
}
if(is_float($c)){
    echo "É float";
}else {
    echo "$c Não é float<br>";
}

?>