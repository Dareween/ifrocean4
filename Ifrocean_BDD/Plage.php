<?php


include_once 'Config.php';

class Plage {

    public $id;
    public $superficie;
    public $nomplage;
    public $ville;
    public $date_prelevement;
    public $cloturer;
    


    public function __construct($nomplage, $superficie, $ville, $date_prelevement, $cloturer, $cle = 0) {
        $this->id = $cle;
        $this->superficie = $superficie;
        $this->nomplage = $nomplage;
        $this->ville = $ville;
        $this->date_prelevement = $date_prelevement;
        $this->cloturer = $cloturer;
       
       
    }


   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO plages(nomplage, superficie, ville, date_prelevement, cloturer) "
                  . "VALUES (:nomplage,:superficie,:ville,:date_prelevement, :cloturer)");
          
          
    
           
            $req->bindParam(":nomplage", $this->nomplage);
            $req->bindParam(":superficie", $this->superficie);
            $req->bindParam(":ville", $this->ville);
             $req->bindParam(":date_prelevement", $this->date_prelevement);
              $req->bindParam(":cloturer", $this->cloturer); 
            
           
            
            
            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
    
    
        public function cloturer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("UPDATE plages SET cloturer=:cloturer where id=:cle");

        $req->bindParam(":cle", $this->id);
         $req->bindParam(":cloturer", $this->cloturer);

        $req->execute();
    }

    
    
    
    
    

    public static function getAllPlages() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select nomplage, superficie, ville, date_prelevement, cloturer, id from plages");

        $req->execute();

        if ($req->rowCount() >= 1) {
            
            while ($ligne = $req->fetch()) {
                $plages[] = new Plage($ligne["nomplage"], $ligne["superficie"], $ligne["ville"], $ligne["date_prelevement"], $ligne["cloturer"], $ligne["id"]);
                
            }
          
            return $plages;
        }
    }
    
      public static function getAllPlagesNonCloturees() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select cloturer, nomplage, superficie, ville, date_prelevement, cloturer, id from plages WHERE cloturer='0' ");

        $req->execute();

        if ($req->rowCount() >= 1) {
            
            while ($ligne = $req->fetch()) {
                $plages[] = new Plage($ligne["nomplage"], $ligne["superficie"], $ligne["ville"], $ligne["date_prelevement"], $ligne["cloturer"], $ligne["id"]);
                
            }
          
            return $plages;
        }
    }
    
    
        public static function getAllPlagesById() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);
         
        $id=$_GET["id"];

        
        $req = $pdo->prepare("select nomplage, superficie, ville, date_prelevement, cloturer, id from plages WHERE plages.id='$id'" );

        $req->execute();

        if ($req->rowCount() >= 1) {
            
            while ($ligne = $req->fetch()) {
                $plages[] = new Plage($ligne["nomplage"], $ligne["superficie"], $ligne["ville"], $ligne["date_prelevement"], $ligne["cloturer"], $ligne["id"]);
                
            }
          
            return $plages;
        }
    }

    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select nomplage, superficie, ville, cloturer, date_prelevement, id from plages"
                . " where id=:cle");
        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
          while  ($ligne = $req->fetch());

            
        $plage = new Plage($ligne["nomplage"], $ligne["superficie"], $ligne["ville"], $ligne["date_prelevement"], $ligne["cloturer"], $ligne["id"]);
       
        

            return $plage;
            
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from plages"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}
