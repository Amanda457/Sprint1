<?php 
require"Book.php";

//Instanciem objecte:
$biblia = new Book(1300);

//Comprovem que les funcions ens retorna els directoris demanats:
$biblia->getDir();
$biblia->getFile();

//Comprovem que hem sobreescrit el mètode màgic:
echo $biblia->__toString();

//Instanciem un altre objecte de la mateixa classe i provem aquest mètode sobreescrit:
$principito = new Book(78);
echo $principito->__toString();

?>