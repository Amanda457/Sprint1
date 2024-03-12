<?php
function quinGrau($nota) : string {
$missatge = "";
    if ($nota>59){
        $missatge = "Primera Divisió.";
    } else if ( $nota> 44){
        $missatge = "Segona  Divisió.";
    } else if ($nota> 32){
        $missatge = "Tercera  Divisió.";
    } else {
        $missatge= "Reprovar";
    }

return $missatge;
}

echo quinGrau(32);


?>