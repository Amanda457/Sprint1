<?php
require "Animal.php";
require "Dog.php";
require "Cat.php";

//Instanciem un animal de cada classe:
$mishi = new Cat ("Mishi");
$baloo = new Dog ("Baloo");

//Utilitzem els mètodes definits a cada subclasse:
$mishi -> makeSound();
$baloo -> makeSound();

?>