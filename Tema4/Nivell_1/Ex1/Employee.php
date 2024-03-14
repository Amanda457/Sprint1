<?php
class Employee{

    public string $name;
    public int $sou;

    function  __construct(string $name, int $sou){
        $this->name = $name;
        $this->sou = $sou;
    }

     function get_name(){
        return $this->name;
    }
    function get_sou() {
        return $this->sou;
    }

     function print(){
        echo $this->name;
        
        if ($this->sou <= 6000) {
            echo ", no li toca pagar impostos.";
        } else {
            echo ", ha de pagar impostos.";
        }
    }

}



?>