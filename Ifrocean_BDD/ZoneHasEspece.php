<?php


include_once 'Config.php';
include_once 'Triangle.php';

class ZoneHasEspece {

    public $id_zhe;
    public $quantite;
    public $zone_id;
    public $espece_id;
    public $densite_zone;
  
   
    


    public function __construct($zone_id, $espece_id, $quantite, $cle = 0) {
        $this->zone_id = $zone_id;
        $this->espece_id = $espece_id;
        $this->quantite = $quantite;
        $this->id_zhe = $cle;
     
    }


   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO zones_has_especes(zone_id, espece_id, quantite, densite_zone) "
                  . "VALUES (:zone_id,:espece_id,:quantite,:densite_zone);");
         /**/
          
           $req->bindParam(":espece_id", $this->espece_id);
            $req->bindParam(":zone_id", $this->zone_id);
            $req->bindParam(":quantite", $this->quantite);
              $req->bindParam(":densite_zone", $this->densite_zone);
            
           $req->execute();
            
     
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
    
    
    
     public function calculerDensite($surface, $quantite) {
      $densite=$quantite/$surface;
       return  $densite;
        
    }
    
    
    
    
    
    
    
    

    public static function getAllZonesHasEspeces() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("SELECT id_zhe, zone_id, espece_id, quantite FROM zones_has_especes");
        
        
        $req->execute();
        

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
                $zoneshasespeces[] = new ZoneHasEspece($ligne["zone_id"], $ligne["espece_id"], $ligne["quantite"], $ligne["id_zhe"] );
                
            }
          
            return $zoneshasespeces;
        }
    }

    /* suite à metre à jour*/
    
    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id_zhe, zone_id, espece_id quantite "
                . "from zones_has_especes"
                . " where id_zhe=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

         
            $zonehasespece = new ZoneHasEspece($ligne["zone_id"], $ligne["espece_id"], $ligne["quantite"], $ligne["id_zhe"]);


            return $zonehasespece;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from zones_has_especes"
                . " where id_zhe=:cle");

        $req->bindParam(":cle", $this->id_zhe);

        $req->execute();
    }

}
