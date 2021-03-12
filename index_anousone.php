<?php 

class Car{

    public $wheels = 4;
    private $_color = "red";

    public function honk(){
        return'BEEEEEEP';
    }
    public function getColor(){
        return $this -> _color;
    }
    public function setColor($color){
         $this -> _color = $color;
    }

    function __construct(){
        echo 'YEAH';
    }


}



$carObjet = new Car;

echo 'ma voiture est de couleur' . $carObjet->getColor() . '<br>';
echo 'ma voiture dispose de ' . $carObjet->$wheels . 'roues <br>';
echo 'lorsque j\'appuie sur le klaxon, elle emet le bruit ' . $carObjet->honk() .'<br>';



$carObjet->wheels = 3;
$carObjet -> setColor('blue');

echo 'ma voiture dispose de ' . $carObjet->$wheels . 'roues <br>';





?>