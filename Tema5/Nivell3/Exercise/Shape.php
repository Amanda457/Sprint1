<?php
abstract class Shape{
    public int $ample;
    public int $alt;

    function __construct(int $ample, int $alt){
        $this->ample = $ample;
        $this->alt = $alt;

    }

    abstract function calcularArea();


}
?>