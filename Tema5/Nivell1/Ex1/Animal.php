<?php
abstract class Animal{
    public string $name;

   function __construct(string $name){
    $this->name = $name;
   }

   abstract function makeSound();
   


}
?>