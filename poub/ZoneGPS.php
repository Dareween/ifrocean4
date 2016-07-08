<?php

include_once 'PolygoneGPS.php';
include_once 'Config.php';

class ZoneGPS extends PolygoneGPS {

    public $id;

    public function __construct($p1, $p2, $p3, $p4, $cle = 0) {
        $desPoints = array($p1, $p2, $p3, $p4);
        $this->id = $cle;
        parent::__construct($desPoints);
    }

    
    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);


            // pour éviter les injections sql
            $req = $pdo->prepare("INSERT INTO zonesGPS "
                     . "(latitude-A-degre,latitude-A-minute,latitude-A-seconde,longitude-A-degre,longitude-A-minute,longitude-A-seconde,"
                    ."latitude-B-degre,latitude-B-minute,latitude-B-seconde,longitude-B-degre,longitude-B-minute,longitude-B-seconde, "
                    ."latitude-C-degre,latitude-C-minute,latitude-C-seconde,longitude-C-degre,longitude-C-minute,longitude-C-seconde, "
                    ."latitude-D-degre,latitude-D-minute,latitude-D-seconde,longitude-D-degre,longitude-D-minute,longitude-D-seconde) "
                    . "values (:latitude-A-degre,:latitude-A-minute,:latitude-A-seconde,:longitude-A-degre,:longitude-A-minute,:longitude-A-seconde,"
                    .":latitude-B-degre,:latitude-B-minute,:latitude-B-seconde,:longitude-B-degre,longitude-B-minute,longitude-B-seconde,"
                    .":latitude-C-degre,:latitude-C-minute,:latitude-C-seconde,:longitude-C-degre,:longitude-C-minute,:longitude-C-seconde,"
                    .":latitude-D-degre,:latitude-D-minute,:latitude-D-seconde,:longitude-D-degre,:longitude-D-minute,:longitude-D-seconde)");
        
      
            $req->bindParam(":latitude-A-degre", $this->lesPoints[0]->degreLat);
            $req->bindParam(":latitude-A-minute", $this->lesPoints[0]->minuteLat);
            $req->bindParam(":latitude-A-seconde", $this->lesPoints[0]->secondeLat);
            $req->bindParam(":longitude-A-degre", $this->lesPoints[0]->degreLong);
            $req->bindParam(":longitude-A-minute", $this->lesPoints[0]->minuteLong);
            $req->bindParam(":longitude-A-seconde", $this->lesPoints[0]->secondeLong);
            
             $req->bindParam(":latitude-B-degre", $this->lesPoints[1]->degreLat);
            $req->bindParam(":latitude-B-minute", $this->lesPoints[1]->minuteLat);
            $req->bindParam(":latitude-B-seconde", $this->lesPoints[1]->secondeLat);
            $req->bindParam(":longitude-B-degre", $this->lesPoints[1]->degreLong);
            $req->bindParam(":longitude-B-minute", $this->lesPoints[1]->minuteLong);
            $req->bindParam(":longitude-B-seconde", $this->lesPoints[1]->secondeLong);
            
             $req->bindParam(":latitude-C-degre", $this->lesPoints[2]->degreLat);
            $req->bindParam(":latitude-C-minute", $this->lesPoints[2]->minuteLat);
            $req->bindParam(":latitude-C-seconde", $this->lesPoints[2]->secondeLat);
            $req->bindParam(":longitude-C-degre", $this->lesPoints[2]->degreLong);
            $req->bindParam(":longitude-C-minute", $this->lesPoints[2]->minuteLong);
            $req->bindParam(":longitude-C-seconde", $this->lesPoints[2]->secondeLong);
            
             $req->bindParam(":latitude-D-degre", $this->lesPoints[3]->degreLat);
            $req->bindParam(":latitude-D-minute", $this->lesPoints[3]->minuteLat);
            $req->bindParam(":latitude-D-seconde", $this->lesPoints[3]->secondeLat);
            $req->bindParam(":longitude-D-degre", $this->lesPoints[3]->degreLong);
            $req->bindParam(":longitude-D-minute", $this->lesPoints[3]->minuteLong);
            $req->bindParam(":longitude-D-seconde", $this->lesPoints[3]->secondeLong);

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

        $req = $pdo->prepare("select id, xa, ya, xb, yb, xc, yc, xd, yd, couleur from zones");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $zones = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["xa"], $ligne["ya"]);
                $p2 = new Point($ligne["xb"], $ligne["yb"]);
                $p3 = new Point($ligne["xc"], $ligne["yc"]);
                $p4 = new Point($ligne["xd"], $ligne["yd"]);
                $zones[] = new Zone($p1, $p2, $p3, $p4, $ligne["couleur"], $ligne["id"]);
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
