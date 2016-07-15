<?php


include_once 'Config.php';

class PlageHasZoneHasEspece {

   
    public $plages_id;
    public $espece_id;
    public $zones_has_especes_zone_id;
    public $zones_has_especes_espece_id;
    public $nomespece;
    public $sumquantite;
    public $sumdensite;
    public $extrapolation;
    
   
    


    public function __construct($nomespece, $sumquantite, $plages_id) {
        $this->nomespece=$nomespece;
        $this->sumquantite=$sumquantite;
        $this->plage_id=$plages_id;
        
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

        $req = $pdo->prepare("SELECT DISTINCT nomespece, SUM(quantite) AS quantite, plages_id, zones_has_especes_zone_id, zones_has_especes_espece_id FROM 
            plages_has_zones_has_especes, zones_has_especes, especes 
            GROUP BY nomespece");

        $req->execute();

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
                $plageshaszoneshasespeces[] = new PlageHasZoneHasEspece($ligne["nomespece"], $ligne["quantite"], $ligne["plage_id"]);

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
