<?php 
class Book{
    public int $paginas;

    public function __construct(int $paginas){
        $this->paginas = $paginas;
    }
// Es creen els dos mètodes utilitzant dins del cos de la funció, les constants màgiques corresponents:
    function getFile(){
        echo "El path sencer és: " . __FILE__ . "<br>";
    }

    function getDir(){
        echo "El directori del fitxer és: " . __DIR__. "<br>";
    }

// Sobreescrivim el mètode màgic:
    public function __toString() : string{
        $missage = "Tengo un total de " . $this->paginas . " páginas.<br>";
        return $missage;
    }

}

?>

