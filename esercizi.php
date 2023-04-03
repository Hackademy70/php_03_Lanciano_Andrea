<?php

// PRIMO ESERCIZIO
//     - Riprodurre un negozio di smartphone in OOP seguendo questa gerarchia di classi,
// con caratteristiche a scelta (Marchio, Modello, px della fotocamera, Prezzo….e altri a vostra scelta)
//         - Smartphone
//         - Apple
//         - Samsung
//         - Xiaomi
//     - Tenere il conto degli oggetti creati per ogni classe
//     - Stampare la vendita di uno smartphone. Es: “Questo smartphone e’ un Iphone ,
//modello 13 pro max ed ha un costo di 20000 euro ”
//     - Creare un metodo che mi permetta di applicare una cover posteriore e una pellicola anteriore
// per ogni smartphone. Una volta applicata, stampare “Ora il posteriore è più protetto!” nel primo caso
//, “Ora l’ anteriore è più protetto” nel secondo.

//1. creare una classe di smartphone
//2. creare una sottoclasse con la marca e modello


abstract class Shop {
    public $marchio;
    public $modello;
    public $fotocamera;


    public function __construct($_marchio, $_modello, $_fotocamera){
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->fotocamera = $_fotocamera;
    }

    abstract public function vendita();

    abstract public function onCover();


}

class SmartPhone extends Shop {
    public $prezzo;
    public static $counter = 0;

    public function __construct($_marchio, $_modello, $_fotocamera, $_prezzo){
        $this->prezzo = $_prezzo;
        parent::__construct($_marchio, $_modello, $_fotocamera);
        self::$counter++;
    }

    public function vendita(){
        echo "Questo smartphone e’ un ".$this->marchio." ,modello ".$this->modello." ed ha un costo di ".$this->prezzo." euro perchè ha una fotocamera di".$this->fotocamera."pixels \n";
        echo "Smartphone venduti fino ad ora : ".self::$counter." \n";
    }



    public function onCover(){
        if(self::$counter % 2 == 0){
            echo "Ora il posteriore è più protetto! \n";
        } else {
            echo "Ora l’ anteriore è più protetto \n";
        }

    }
}


// $smartphone1 = new Smartphone("Apple", "iPhone Pro 14", "48Mega", 1200);
// $smartphone1->vendita();
// $smartphone1->onCover();
// $smartphone2 = new Smartphone("Samsung", "Galaxy Fold", "20Mega", 1800);
// $smartphone2->vendita();
// $smartphone2->onCover();
// $smartphone3 = new Smartphone("Samsung", "Galaxy S20", "18Mega", 1600);
// $smartphone3->vendita();
// $smartphone3->onCover();
// $smartphone4 = new Smartphone("Apple", "iPhone Pro 12", "12Mega", 1000);
// $smartphone4->vendita();
// $smartphone4->onCover();




// SECONDO ESERCIZIO
// - Creare un’astrazione che rappresenti la Flora e una che rappresenti la Fauna.
// - Per ognuna di queste creare 3 classi a scelta che avranno in comune almeno un metodo (sempre a scelta).
// Date sfogo alla fantasia!



abstract class Vita {
    public $vivo;
    public $doveVive;


    public function __construct($_vivo, $_doveVive){
        $this->vivo = $_vivo;
        $this->doveVive = $_doveVive;
    }

    // abstract public function vendita();

    // abstract public function onCover();
}


class Fauna extends Vita {
    public $tipo;

    public function __construct($_vivo, $_doveVive, $_tipo){
        $this->tipo = $_tipo;
        parent::__construct($_vivo, $_doveVive);
    }
}

class Flora extends Vita{
    public $altitudine;

    public function __construct($_vivo, $_doveVive, $_altitudine){
        $this->altitudine = $_altitudine;
        parent::__construct($_vivo, $_doveVive);
    }
}

$tigre = new Fauna("si", "giungla", "felino");
$alga = new Flora("si", "giungla", "mare");
var_dump($tigre);
var_dump($alga);

?>