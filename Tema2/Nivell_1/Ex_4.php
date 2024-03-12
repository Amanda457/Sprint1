<?php
function contar($numMax, $deCuanto){
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