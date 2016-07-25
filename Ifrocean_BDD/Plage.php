<?php


include_once 'Config.php';

class Plage {

    public $id;
    public $superficie;
    public $nomplage;
    public $ville;
    public $date_prelevement;
    


    public function __construct($nomplage, $superficie, $ville, $date_prelevement, $cle = 0) {
        $this->id = $cle;
        $this->superficie = $superficie;
        $this->nomplage = $nomplage;
        $this->ville = $ville;
        $this->date_prelevement = $date_prelevement;
       
       
    }


   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO plages(nomplage, superficie, ville, date_prelevement) "
                  . "VALUES (:nomplage,:superficie,:ville,:date_prelevement)");
          
          
    
           
            $req->bindParam(":nomplage", $this->nomplage);
            $req->bindParam(":superficie", $this->superficie);
            $req->bindParam(":ville", $this->ville);
             $req->bindParam(":date_prelevement", $this->date_prelevement);
            
           
            
            
            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }

    public static function getAllPlages() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select nomplage, superficie, ville, date_prelevement, id from plages");

        $req->execute();

        if ($req->rowCount() >= 1) {
            
            while ($ligne = $req->fetch()) {
                $plages[] = new Plage($ligne["nomplage"], $ligne["superficie"], $ligne["ville"], $ligne["date_prelevement"], $ligne["id"]);
                
            }
          
            return $plages;
        }
    }

    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, nomplage from plages"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
          while  ($ligne = $req->fetch());

            
        $plage = new Plage($ligne["nomplage"], $ligne["superficie"], $ligne["ville"], $ligne["date_prelevement"]);
       

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
