<?php
function contar($numMax, $deCuanto){
  /* No he posat el valor predefinit en el cas de no introduir per paràmetre el $numMax 
  perquè són 2 arguments els que entren i no se com fer-ho, així que opto per un if.*/
   
  $i = 0;
    while($i <= $numMax){
         if ($numMax == null){
         $numMax = 10;
         }
     echo $i."<br>";
     $i+= $deCuanto;

}
echo "<br>";
}
//Dos exemples de funcionament:
contar(null, 2);
contar(100, 10);
?>