<?php
Class Circle extends Shape{
    public int $radio;
   
    // Setters
    function set_radio($radio) {
        $this->radio = $radio;
    }

    function calcularArea(){
        $area = pi()* ($this->radio*$this->radio);
        echo "L'àrea del cercle és de ". number_format($area, $decimals = 2) . "<br>";

    }

}

?>