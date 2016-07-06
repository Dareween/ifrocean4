<?php

include_once 'GPS.php';

/**
 * Représente un polygone dans un repère à 2 dimensions
 *
 * @author Alan
 */
abstract class PolygoneGPS {

    //un tableau de point
    public $lesPoints;
    protected $couleur;

    /**
     * 
     * @param array(Points) $desPoints des points pour faire un polygone
     */
    public function __construct($desPoints, $couleur) {
        $this->lesPoints = $desPoints;
        $this->couleur = $couleur;
    }

    public function calculerPerimetre() {
        $res = 0;
        for ($i = 0; $i < count($this->lesPoints); $i++) {
            $j = $i + 1;
            if ($j == count($this->lesPoints)) {
                $j = 0;
            }
            $res+=$this->lesPoints[$i]->calculerDistance(
                    $this->lesPoints[$j]
            );
        }

        return $res;
    }

    public abstract function CalculerSurface();
}
