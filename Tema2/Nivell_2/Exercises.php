<?php
echo "<h2> Exercici 1 </h2>";
$durada = 0.0;

function calcularCost($durada): void{
    $tarifaPlana = 3;
    $costBase = 10;
    $costExtra = 5;

    if ($durada < $tarifaPlana) {
        echo "La trucada té un cost total de " . $costBase . " cèntims. <br>";
    } else {
        $minutsAdic = $durada - $tarifaPlana;
        $costTotal = $costBase + ($costExtra * $minutsAdic);
        echo "La trucada té un cost total de " . $costTotal . " cèntims. <br>";
    }
}
//Exemples de funcionament:
calcularCost(4.6);
calcularCost(2);
calcularCost(3.1);

?>