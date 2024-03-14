<?php
require "Shape.php";
require "Triangle.php";
require "Rectangle.php";

//Instanciem els objectes:
$triangulo = new Triangle (2,5);
$rectangulo = new Rectangle(45,20);
$triangulo2 = new Triangle (8,12);

// Comprovem que les funcions s'executen correctament.
$rectangulo -> calcularArea();
$triangulo -> calcularArea();
$triangulo2 -> calcularArea();








?>