<?php

include_once 'Polygone.php';
include_once 'Config.php';

class Zone extends Polygone {

    public $id;
    public $surface;


    public function __construct($p1, $p2, $p3, $p4, $couleur, $cle = 0) {
        $desPoints = array($p1, $p2, $p3, $p4);
        $this->id = $cle;
       parent::__construct($desPoints, $couleur);
        /*$this->surface=$this->calculerSurface();*/
    }

    
    
    
    public function calculerSurface() {
        $t1 = new Triangle($this->lesPoints[0]
                , $this->lesPoints[1]
                , $this->lesPoints[2]);
        $t2 = new Triangle($this->lesPoints[2]
                , $this->lesPoints[3]
                , $this->lesPoints[0]);
        
        $surface = $t1->calculerSurface()+$t2->calculerSurface();
       
        return $surface;
        
    }
    

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO zones(latAdegre, latAmin, latAsec, longAdegre, longAmin, longAsec, "
                  . "latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, "
                  . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                  . "latDdegre, latDmin, latDsec, longDdegre, longDmin, longDsec, surface, latA, longA, latB, longB, latC, longC, latD, longD) "
                  . "VALUES (:latAdegre, :latAmin, :latAsec, :longAdegre, :longAmin, :longAsec, "
                  . ":latBdegre, :latBmin, :latBsec, :longBdegre, :longBmin, :longBsec, "
                  . ":latCdegre, :latCmin, :latCsec, :longCdegre, :longCmin, :longCsec, "
                  . ":latDdegre, :latDmin, :latDsec, :longDdegre, :longDmin, :longDsec, :surface, :latA, :longA, :latB, :longB, :latC, :longC, :latD, :longD)");
          
          
    
           
            $req->bindParam(":latAdegre", $this->lesPoints[0]->degreLat);
            $req->bindParam(":latAmin", $this->lesPoints[0]->minuteLat);
            $req->bindParam(":latAsec", $this->lesPoints[0]->secondeLat);  
            $req->bindParam(":longAdegre", $this->lesPoints[0]->degreLong);
            $req->bindParam(":longAmin", $this->lesPoints[0]->minuteLong);
            $req->bindParam(":longAsec", $this->lesPoints[0]->secondeLong);
            $req->bindParam(":latBdegre", $this->lesPoints[1]->degreLat);
            $req->bindParam(":latBmin", $this->lesPoints[1]->minuteLat);
            $req->bindParam(":latBsec", $this->lesPoints[1]->secondeLat);
            $req->bindParam(":longBdegre", $this->lesPoints[1]->degreLong);
            $req->bindParam(":longBmin", $this->lesPoints[1]->minuteLong);
            $req->bindParam(":longBsec", $this->lesPoints[1]->secondeLong);
            $req->bindParam(":latCdegre", $this->lesPoints[2]->degreLat);
            $req->bindParam(":latCmin", $this->lesPoints[2]->minuteLat);
            $req->bindParam(":latCsec", $this->lesPoints[2]->secondeLat);
            $req->bindParam(":longCdegre", $this->lesPoints[2]->degreLong);
            $req->bindParam(":longCmin", $this->lesPoints[2]->minuteLong);
            $req->bindParam(":longCsec", $this->lesPoints[2]->secondeLong);
            $req->bindParam(":latDdegre", $this->lesPoints[3]->degreLat);
            $req->bindParam(":latDmin", $this->lesPoints[3]->minuteLat);
            $req->bindParam(":latDsec", $this->lesPoints[3]->secondeLat);
            $req->bindParam(":longDdegre", $this->lesPoints[3]->degreLong);
            $req->bindParam(":longDmin", $this->lesPoints[3]->minuteLong);
            $req->bindParam(":longDsec", $this->lesPoints[3]->secondeLong);
            $req->bindParam(":surface", $this->surface);
             $req->bindParam(":latA", $this->lesPoints[0]->latitudeNumerique);
             $req->bindParam(":longA", $this->lesPoints[0]->longitudeNumerique);
             $req->bindParam(":latB", $this->lesPoints[1]->latitudeNumerique);
             $req->bindParam(":longB", $this->lesPoints[1]->longitudeNumerique);
             $req->bindParam(":latC", $this->lesPoints[2]->latitudeNumerique);
             $req->bindParam(":longC", $this->lesPoints[2]->longitudeNumerique);
             $req->bindParam(":latD", $this->lesPoints[3]->latitudeNumerique);
             $req->bindParam(":longD", $this->lesPoints[3]->longitudeNumerique);
            
             
           
            /*$req->bindParam(":surface", surface);*/
            
            
            
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
        
       /*requet qui fonctionne pour récuperer les infos croisées entre zones et objet
         * 
        $req = $pdo->prepare("SELECT zones_id, nomespece, quantite FROM 
            `zones_has_especes`INNER JOIN zones ON zones_has_especes.zones_id = zones.id 
            INNER JOIN especes ON zones_has_especes.especes_id = especes.id ");*/


                
        $req = $pdo->prepare("select id, latAdegre, latAmin, latAsec, longAdegre, longAmin, longAsec, "
                . "latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, "
                . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                . "latDdegre, latDmin, latDsec, longDdegre, longsDmin, longDsec, "
                . "couleur from zones");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $zones = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["latAdegre"], $ligne["latAmin"], $ligne["latAsec"], $ligne["longAdegre"], $ligne["longAmin"], $ligne["longAsec"]);
                $p2 = new Point($ligne["latBdegre"], $ligne["latBmin"], $ligne["latBsec"], $ligne["longBdegre"], $ligne["longBmin"], $ligne["longBsec"]);
                $p3 = new Point($ligne["latCdegre"], $ligne["latCmin"], $ligne["latCsec"], $ligne["longCdegre"], $ligne["longCmin"], $ligne["longCsec"]);
                $p4 = new Point($ligne["latDdegre"], $ligne["latDmin"], $ligne["latDsec"], $ligne["longDdegre"], $ligne["longDmin"], $ligne["longDsec"]);
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

        $req = $pdo->prepare("select id, latAdegre, latAmin, latAsec, longAdegre, longAmin, longAsec, "
                . "latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, "
                . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                . "latDdegre, latDmin, latDsec, longDdegre, longDmin, longDsec, "
                . "couleur from zones"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1=new Point($ligne['latAdegre'], $ligne['latAmin'], $ligne['latAsec'], $ligne['longAdegre'], $ligne['longAmin'], $ligne['longAsec']);
            $p2=new Point($ligne['latBdegre'], $ligne['latBmin'], $ligne['latBsec'], $ligne['longBdegre'], $ligne['longBmin'], $ligne['longBsec']);
            $p3=new Point($ligne['latCdegre'], $ligne['latCmin'], $ligne['latCsec'], $ligne['longCdegre'], $ligne['longCmin'], $ligne['longCsec']);
            $p4=new Point($ligne['latDdegre'], $ligne['latDmin'], $ligne['latDsec'], $ligne['longDdegre'], $ligne['longDmin'], $ligne['longDsec']);
                    
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
