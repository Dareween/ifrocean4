<?php

include_once 'Polygone.php';
include_once 'Config.php';

class Zone extends Polygone {

    public $id;
    public $degrelat;
    public $minutelat;
    public $secondelat;
    public $degrelong;
    public $minutelong;
    public $secondelong;
   
    
    
    

    public function __construct($p1, $p2, $p3, $p4, $degrelat, $minutelat, $secondelat, $degrelong, $minutelong, $secondelong, $couleur, $cle = 0) {
        $desPoints = array($p1, $p2, $p3, $p4);
        $this->degrelat = $degrelat;
        $this->minutelat = $minutelat;
        $this->secondelat = $secondelat;
        $this->degrelong = $degrelong;
        $this->minutelong = $minutelong;
        $this->secondelong= $secondelong;
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
            $req = $pdo->prepare("INSERT INTO zones "
                    . "(xa,ya,xb,yb,xc,yc,xd,yd,couleur) "
                    . "values (:xa,:ya,:xb,:yb,:xc,:yc,:xd,:yd,:couleur)");
            $req->bindParam(":xa", $this->lesPoints[0]->x);
            $req->bindParam(":ya", $this->lesPoints[0]->y);
            $req->bindParam(":xb", $this->lesPoints[1]->x);
            $req->bindParam(":yb", $this->lesPoints[1]->y);
            $req->bindParam(":xc", $this->lesPoints[2]->x);
            $req->bindParam(":yc", $this->lesPoints[2]->y);
            $req->bindParam(":xd", $this->lesPoints[3]->x);
            $req->bindParam(":yd", $this->lesPoints[3]->y);
            $req->bindParam(":couleur", $this->couleur);

            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }

    public static function getAllZones() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, xa, ya, xb, yb, xc, yc, xd, yd, latAdegre, "
                . "latAmin, latAsec, longAdegre, longAmin, longAsec, latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, latCdegre, latCmin,latCsec, longCdegre, longCmin, longCsec, latDdegre, latDmin, latDsec, longDdegre, longDmin, longDsec, "
                . "couleur from zones");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $zones = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["xa"], $ligne["ya"]);
                $p2 = new Point($ligne["xb"], $ligne["yb"]);
                $p3 = new Point($ligne["xc"], $ligne["yc"]);
                $p4 = new Point($ligne["xd"], $ligne["yd"]);
                $zones[] = new Zone($p1, $p2, $p3, $p4, $ligne["latAdegre"], $ligne["latAmin"], $ligne["latAsec"], $ligne["longAdegre"], $ligne["longAmin"], $ligne["longAsec"], $ligne["latBdegre"],$ligne["latBmin"], $ligne["latBsec"], $ligne["longBdegre"], $ligne["longBmin"], $ligne["longBsec"], $ligne["latCdegre"], $ligne["latCmin"], $ligne["latCsec"], $ligne["longCdegre"], $ligne["longCmin"], $ligne["longCsec"], $ligne["latDdegre"],$ligne["latDmin"], $ligne["latDsec"], $ligne["longDdegre"], $ligne["longDmin"], $ligne["longDsec"], $ligne["couleur"], $ligne["id"]);
            }
            return $zones;
        }
    }

    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, xa, ya, xb, yb, xc, yc, xd, yd, couleur from zones"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1 = new Point($ligne["xa"], $ligne["ya"]);
            $p2 = new Point($ligne["xb"], $ligne["yb"]);
            $p3 = new Point($ligne["xc"], $ligne["yc"]);
            $p4 = new Point($ligne["xd"], $ligne["yd"]);
            $zone = new Zone($p1, $p2, $p3, $p4, $ligne["couleur"], $ligne["id"]);

            return $zone;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from zones"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}
