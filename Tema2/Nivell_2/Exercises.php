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

echo "<h2> Exercici 2 </h2>";


function calcularCompra(int $xocolata, int $xiclet, int $caramel) : void{
    $totalXoco = calcularXocolata($xocolata);
    $totalXiclet = calcularXiclet($xiclet);
    $totalCaramel = calcularCaramel($caramel);
   
    echo "El resum de la compra és de $totalXoco + $totalXiclet + $totalCaramel amb el total de: " . $totalXoco+$totalXiclet+$totalCaramel."<br>";
}
function calcularXocolata (int $xocolata) : int {
    $preuXocolata = 1;
    $costXoco = $xocolata * $preuXocolata;


    return $costXoco;
}

function calcularXiclet (int $xiclet) : float {
    $preuXicle = 0.5;
    $costXicle = $xiclet * $preuXicle;

    return $costXicle;
}

function calcularCaramel (int $caramel) : float {
    $preuCaramel = 1.5;
    $costCaramel = $caramel * $preuCaramel;

    return $costCaramel;
}

calcularCompra(2, 4, 5);
calcularCompra(2, 1, 1); //Com a l'enunciat de l'exercici.
?>
