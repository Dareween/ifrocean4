<?php

/**
 * Représente un point dans un repère à deux dimensions
 *
 * @author Alan
 */
class Point {

    public $x;
    public $y;

    public function __construct($abscisse, $ordonnee) {
        $this->x = $abscisse;
        $this->y = $ordonnee;
    }

    public function calculerDistance($autrePoint) {
        return sqrt(
                pow($this->x - $autrePoint->x, 2) +
                pow($this->y - $autrePoint->y, 2)
        );
    }
}
