<?php

$x = 5;
$y = 2;
$n = 1.1;
$m = 4.2;

echo "La variable x té el valor de: " . $x."<br>";
echo "La variable y té el valor de: " . $y."<br>";
echo "La suma dona: ".$x + $y ."<br>";
echo "La resta dona: ".$x - $y."<br>";
echo "El producte dona: ".$x * $y."<br>";
echo "El mòdul dona: ".$x % $y."<br><br>";

echo "La variable n té el valor de: " . $n."<br>";
echo "La variable m té el valor de: " . $m."<br>";
echo "La suma dona: ". $n + $m ."<br>";
echo "La resta dona: ".$n - $m."<br>";
echo "El producte dona: ".$n * $m."<br>";
echo "El mòdul dona: ".$n % $m."<br><br>";

$doble = 2;
echo "El doble de la variant x és: ".$x * $doble."<br>";
echo "El doble de la variant y és: ".$y * $doble."<br>";
echo "El doble de la variant n és: ".$n * $doble."<br>";
echo "El doble de la variant m és: ".$m * $doble."<br>";

echo "La suma de totes les variables dona el resultat de: " . ($x+$y+$n+$m) . "<br>";
echo "El producte de totes les variables dona el resultat de: " . $x*$y*$n*$m .  "<br><br>";

function calculadora ($num1, $num2, $operator){

switch ($operator){
    case "+": 
        echo "La suma de $num1 i de $num2 és igual a: " . $num1 + $num2 . "<br>";
        break;
    case "-": 
        echo "La resta de $num1 i de $num2 dona un total de: " . $num1 - $num2 . "<br>";
        break;    
    case "*": 
        echo "La multiplicació de $num1 i $num2 és igual a: " . $num1 * $num2 . "<br>";
        break;
    case "/": 
        echo "La divisió entre $num1 i $num2 dona el resultat de: " . $num1 / $num2 . "<br>";
        break;
}

}
//Exemple de funcionament:
calculadora(2, 3, "-");
calculadora(8, 12, "*");
calculadora(20, 5, "+");
calculadora(40, 8, "/");
?>