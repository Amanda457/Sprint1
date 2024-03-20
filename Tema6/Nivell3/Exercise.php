<?php 

enum Tema : string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum Type {
    case Fitxer;
    case Article;
    case Video;
}

class Recurs {
    public string $name;
   // public Tema $tema;
    public string $url;
    //public Type $type;

    public function __construct( public Tema $tema, public Type $type)
    {
        
    }

}

$recurs = new Recurs (Tema::HTML, Type::Article);

var_dump($recurs);

?>