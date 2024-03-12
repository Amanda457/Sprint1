<?php

function isBitten(){
$bitten = false;

    if (rand(1,2) == 2){
    $bitten = true;
    }

return var_dump($bitten);
}

echo isBitten();
?>