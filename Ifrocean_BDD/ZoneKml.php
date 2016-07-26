<?php


include_once 'Config.php';
include_once 'Triangle.php';

class ZoneKml {

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

 

    
  
    public static function getAllZonesKml() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("SELECT latA, latB, latC, latD, longA, longB, longC, longD, nomespece, id_zhe, zone_id, espece_id, z.plage_id, quantite, densite_zone 
FROM zones_has_especes zhe, especes e, zones z
WHERE zhe.espece_id = e.id AND
zhe.zone_id = z.id");
        
        $req->execute();
        

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
                $zoneshasespeces[] = new ZoneKml($ligne["zone_id"], $ligne["espece_id"], $ligne["plage_id"], $ligne["quantite"], $ligne["nomespece"],$ligne["latA"], $ligne["latB"], $ligne["latC"], $ligne["latD"], $ligne["longA"], $ligne["longB"], $ligne["longC"], $ligne["longD"], $ligne["id_zhe"] );
                
                
            }
          
            return $zoneshasespeces;
            
        }
        
     
        
        
        
    }

}
