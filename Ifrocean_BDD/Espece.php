<?php


include_once 'Config.php';

class Espece {

    public $id;
    public $nomespece;
   
    


    public function __construct($nomespece, $cle = 0) {
        $this->id = $cle;
        $this->nomespece = $nomespece;
     
    }


   

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO especes(nomespece) "
                  . "VALUES (:nomespece);");
          
          
    
   
            $req->bindParam(":nomespece", $this->nomespece);
            
            $req->execute();
            
            
            
            
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
    

        
           public function Modifier() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("UPDATE especes SET nomespece=:nomespece where id=:cle");

        $req->bindParam(":cle", $this->id);
         $req->bindParam(":nomespece", $this->nomespece);

        $req->execute();
    }


       
    
    
    
    
    
    
    
    
    

    public static function getAllEspeces() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("SELECT id, nomespece FROM especes");
        

        $req->execute();

        if ($req->rowCount() >= 1) {
      
            while ($ligne = $req->fetch()) {
                $especes[] = new Espece($ligne["nomespece"], $ligne["id"]);
                
            }
          
            return $especes;
        }
    }

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
            //echo($ligne["nomespece"]);

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
