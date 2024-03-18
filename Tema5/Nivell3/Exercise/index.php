<?php
require "Shape.php";
require "Circle.php";
//Instanciem l'objecte:

$cercle = new Circle(0,0);//El cercle no té amplada ni alçada, però necessitem instanciar l'objecte donant-li valor a aquests atributs.

//Configurem diametre de l'objecte cercle.
$cercle->set_radio(12);
$cercle->calcularArea();

?>