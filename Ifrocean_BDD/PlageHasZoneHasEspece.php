<?php


include_once 'Config.php';

class PlageHasZoneHasEspece {

   
    public $nomplage;
    public $espece_id;
    public $nomespece;
    public $sumquantite;
    public $sumdensite;
    public $extrapolation;
    
    /*public $zones_has_especes_zone_id;
    public $zones_has_especes_espece_id;*/
    
   
    


    public function __construct($nomespece, $sumquantite, $extrapolation, $nomplage, $sumdensite) {
        $this->nomespece=$nomespece;
        $this->sumquantite=$sumquantite;
         $this->extrapolation=$extrapolation;
        $this->nomplage=$nomplage;
        $this->sumdensite=$sumdensite;
        echo($densite);
        echo($densite);
        echo($densite);
        
        /*$this->plages_id=$plages_id;
        $this->zones_has_especes_zone_id=$zones_has_especes_zone_id;
        $this->zones_has_especes_espece_id=$zones_has_especes_espece_id;*/

    }


   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO plages_has_zones_has_especes(plages_id, plages_has_zones_has_especes, zones_has_especes_espece_id) "
                  . "VALUES (:plages_id,:plages_has_zones_has_especes,:zones_has_especes_espece_id);");
         /**/
          
           $req->bindParam(":plages_id", $this->plages_id);
            $req->bindParam(":plages_has_zones_has_especes", $this->plages_has_zones_has_especes);
            $req->bindParam(":zones_has_especes_espece_id", $this->zones_has_especes_espece_id);
            
           $req->execute();
            
     
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
    
    
    
    
    
    
    
    
    
    
    
    

    public static function getAllPlagesHasZonesHasEspeces() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare(""
                . "SELECT nomplage, superficie, nomespece, SUM(quantite) AS sumquantite, SUM(zones.surface), SUM(quantite)/SUM(zones.surface)*plages.superficie AS extrapolation, SUM(quantite)/SUM(zones.surface) AS sumdensite FROM zones, zones_has_especes, plages, especes WHERE zones_has_especes.espece_id=especes.id AND zones_has_especes.plage_id=plages.id AND zones_has_especes.zone_id=zones.id GROUP BY nomespece ORDER BY zones_has_especes.plage_id");


        $req->execute();

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
            $plageshaszoneshasespeces[] = new PlageHasZoneHasEspece($ligne["nomespece"], $ligne["sumquantite"], $ligne["extrapolation"], $ligne["nomplage"], $ligne["sumdensite"]);
                    
            }
           
            return $plageshaszoneshasespeces;
        }
    }
    
    

    
    /* suite à metre à jour*/
    
    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, nomespece from especes"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

         
            $espece = new Espece($ligne["nomespece"], $ligne["id"]);

            return $espece;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from especes"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}
