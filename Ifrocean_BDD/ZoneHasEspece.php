<?php


include_once 'Config.php';
include_once 'Triangle.php';

class ZoneHasEspece {

    public $id_zhe;
    public $quantite;
    public $zone_id;
    public $plage_id;
    public $espece_id;
    public $densite_zone;
    public $nomespece;
    public $latA;
    public $latB;
    public $latC;
    public $latD;
    public $longA;
    public $longB;
    public $longC;
    public $longD;
  
  
   
    


    public function __construct($zone_id, $espece_id, $plage_id, $quantite, $nomespece, $latA, $latB, $latC, $latD, $longA, $longB, $longC, $longD, $cle = 0) {
        $this->zone_id = $zone_id;
        $this->espece_id = $espece_id;
        $this->plage_id = $plage_id;
        $this->quantite = $quantite;
        $this->nomespece = $nomespece;
        $this->latA = $latA;
        $this->latB = $latB;
        $this->latC = $latC;
        $this->latD = $latD;
        $this->longA = $longA;
        $this->longB = $longB;
        $this->longC = $longC;
        $this->longD = $longD;
        
        $this->id_zhe = $cle;
     
    }

 
     public function calculerDensite($surface, $quantite) {
      $densite_zone=$quantite/$surface;
       
      return  $densite_zone;
        
    }
   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO zones_has_especes(zone_id, espece_id, plage_id, quantite) "
                  . "VALUES (:zone_id,:espece_id,:plage_id,:quantite);");
         /**/
         
         
          
           $req->bindParam(":espece_id", $this->espece_id);
            $req->bindParam(":zone_id", $this->zone_id);
            $req->bindParam(":plage_id", $this->plage_id);
            $req->bindParam(":quantite", $this->quantite);
             /*$req->bindParam(":densite_zone", $this->densite_zone);*/
              
            
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

        $req = $pdo->prepare("SELECT latA, latB, latC, latD, longA, longB, longC, longD, nomespece, id_zhe, zone_id, espece_id, zones.plage_id, quantite, densite_zone FROM zones_has_especes, especes, zones GROUP BY zone_id");
        
        $req->execute();
        

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
                $zoneshasespeces[] = new ZoneHasEspece($ligne["zone_id"], $ligne["espece_id"], $ligne["plage_id"], $ligne["quantite"], $ligne["nomespece"],$ligne["latA"], $ligne["latB"], $ligne["latC"], $ligne["latD"], $ligne["longA"], $ligne["longB"], $ligne["longC"], $ligne["longD"], $ligne["id_zhe"] );
                
                
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

         
            $zonehasespece = new ZoneHasEspece($ligne["zone_id"], $ligne["espece_id"], $ligne["plage_id"], $ligne["quantite"], $ligne["nomespece"], $ligne["id_zhe"]);


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
