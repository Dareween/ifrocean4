<?php

include_once 'Polygone.php';
include_once 'Config.php';

class TriangleGPS extends Polygone {

    public $id;

    public function __construct($p1, $p2, $p3) {
        $desPoints = array($p1, $p2, $p3);
        $this->id = $cle;
        parent::__construct($desPoints);
    }



    //calcul avec la formule de héron
    //https://fr.wikipedia.org/wiki/Formule_de_H%C3%A9ron
    public function CalculerSurface() {
        $a = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[1]
        );
        $b = $this->lesPoints[2]->calculerDistance(
                $this->lesPoints[1]
        );
        $c = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[2]
        );

        $p = ($a + $b + $c) / 2;

        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    }

    
    
    
    
  

}
