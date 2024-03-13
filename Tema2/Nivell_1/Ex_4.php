<?php
function contar(int $deCuanto, int $numMax = 10){
  
  $i = 0;
    while($i <= $numMax){
          echo $i."<br>";
     $i+= $deCuanto;

}
echo "<br>";
}
//Dos exemples de funcionament:
contar(2);
contar(10, 100);
?>