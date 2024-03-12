<?php
echo "<h2> Exercici 1 </h2>";
$numbers = array ( 3, 4, 5, 1, 7);

foreach ($numbers as $y){
    echo $y. "<br>";
}
echo "<h2> Exercici 2 </h2>". PHP_EOL;

$x = array (10, 20, 30, 40, 50,60);
echo "La mida del array és de: ".count($x)."<br>";
unset($x[2]);
$x = array_values($x);
/* Per comprobar que s'ha reindexat correctament:
echo var_dump($x);
*/
echo "La mida del array és de: ".count($x)."<br>";
?>
