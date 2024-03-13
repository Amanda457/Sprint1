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

echo "<h2> Exercici 3 </h2>". PHP_EOL;

$paraules= array ("hola","pala", "llengua", "ratlla");
$caracter;

function contiene(array $paraules, string $caracter) : void {
   
    $result = 0;
        foreach ($paraules as $paraula) {
            $place= strpos($paraula, $caracter);

             if ($place === false){
                 $result+=1;
               } }
              if ($result !== 0){
                  echo "False<br>";
              } else {
                   echo "True<br>";
                 }
        }
   
contiene ($paraules, "a");
contiene ($paraules, "o");
contiene ($paraules, "l");

echo "<h2> Exercici 4 </h2>";

$me = array ("Name"=> "Amanda", "Age"=> 28, "Mail"=> "mandy96lomi@gmail.com", "Food" => "Sushi");

foreach ($me as $x => $y) {
    echo "$x: $y <br>";
  }
  

?>