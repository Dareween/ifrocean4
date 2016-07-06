<?php

include_once 'Polygone.php';
include_once 'Config.php';

class Triangle extends Polygone {

    public $id;

    public function __construct($p1, $p2, $p3, $couleur, $cle = 0) {
        $desPoints = array($p1, $p2, $p3);
        $this->id = $cle;
        parent::__construct($desPoints, $couleur);
    }

    public function estEquilateral() {
        $cote1 = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[1]
        );
        $cote2 = $this->lesPoints[2]->calculerDistance(
                $this->lesPoints[1]
        );
        $cote3 = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[2]
        );

        return ($cote1 == $cote2 && $cote2 == $cote3);
    }

    public function estIsocele() {
        $cote1 = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[1]
        );
        $cote2 = $this->lesPoints[2]->calculerDistance(
                $this->lesPoints[1]
        );
        $cote3 = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[2]
        );

        return ($cote1 == $cote2 || $cote2 == $cote3 || $cote1 == $cote3);
    }

    public function estRectangle() {
        $cotes[] = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[1]
        );
        $cotes[] = $this->lesPoints[2]->calculerDistance(
                $this->lesPoints[1]
        );
        $cotes[] = $this->lesPoints[0]->calculerDistance(
                $this->lesPoints[2]
        );

        sort($cotes);

        return pow($cotes[2], 2) == (pow(cote[0], 2) + pow(cote[1], 2));
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

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);


            // pour éviter les injections sql
            $req = $pdo->prepare("INSERT INTO triangles "
                    . "(xa,ya,xb,yb,xc,yc,couleur) "
                    . "values (:xa,:ya,:xb,:yb,:xc,:yc,:couleur)");
            $req->bindParam(":xa", $this->lesPoints[0]->x);
            $req->bindParam(":ya", $this->lesPoints[0]->y);
            $req->bindParam(":xb", $this->lesPoints[1]->x);
            $req->bindParam(":yb", $this->lesPoints[1]->y);
            $req->bindParam(":xc", $this->lesPoints[2]->x);
            $req->bindParam(":yc", $this->lesPoints[2]->y);
            $req->bindParam(":couleur", $this->couleur);

            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }

    public static function getAllTriangles() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, xa, ya, xb, yb, xc, yc, couleur from triangles");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $triangles = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["xa"], $ligne["ya"]);
                $p2 = new Point($ligne["xb"], $ligne["yb"]);
                $p3 = new Point($ligne["xc"], $ligne["yc"]);
                $triangles[] = new Triangle($p1, $p2, $p3, $ligne["couleur"], $ligne["id"]);
            }
            return $triangles;
        }
    }

    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, xa, ya, xb, yb, xc, yc, couleur from triangles"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1 = new Point($ligne["xa"], $ligne["ya"]);
            $p2 = new Point($ligne["xb"], $ligne["yb"]);
            $p3 = new Point($ligne["xc"], $ligne["yc"]);
            $triangle = new Triangle($p1, $p2, $p3, $ligne["couleur"], $ligne["id"]);

            return $triangle;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from triangles"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}
