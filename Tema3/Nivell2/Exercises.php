Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom 
de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri 
tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
<?php
echo "<h2> Exercici 1 </h2>";

$numbers = array (2,5,4.5,11,15,16);
$numbers2 = array (1,2,3,4,5,6,7,8);

$match = array_intersect($numbers,$numbers2);
echo "Els números en comú són: ";
print_r($match);
echo "<br> La mescla dels dos arrays:";

print_r(array_merge($numbers,$numbers2));

echo "<h2> Exercici 2 </h2>";
?>