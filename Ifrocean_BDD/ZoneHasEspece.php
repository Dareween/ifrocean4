<?php


include_once 'Config.php';

class ZoneHasEspece {

   
    public $quantite;
    public $zone_id;
    public $espece_id;
  
   
    


    public function __construct($zone_id, $espece_id, $quantite) {
        $this->zone_id = $zone_id;
        $this->espece_id = $espece_id;
        $this->quantite = $quantite;
     
    }


   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO zones_has_especes(zone_id, espece_id, quantite) "
                  . "VALUES (:zone_id,:espece_id,:quantite);");
         /**/
          
           $req->bindParam(":espece_id", $this->espece_id);
            $req->bindParam(":zone_id", $this->zone_id);
            $req->bindParam(":quantite", $this->quantite);
            
           $req->execute();
            
     
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
    
    
    
    
    
    
    
    
    
    
    
    

    public static function getAllZonesHasEspeces() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("SELECT zone_id, espece_id, quantite FROM zones_has_especes");
        

        $req->execute();

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
                $zoneshasespeces[] = new ZoneHasEspece($ligne["zone_id"], $ligne["espece_id"], $ligne["quantite"]);
                
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
