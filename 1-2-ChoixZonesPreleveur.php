<?php
include_once 'Ifrocean_BDD/Plage.php';
include_once 'Ifrocean_BDD/Zone.php';

$id=$_GET["id"];
$plage=Plage::getById($id);


echo ($plage->id);


?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
        <meta charset="UTF-8">
        <title>Choisir une zone</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
            <header>
            <div class="bandeau1">Projet Ifrocean - Préleveur</div>
            <ol class="breadcrumb">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="1-1-ListeDesPlagesPreleveur.php">Sélection plage</a></li>
</ol>
        </header>
        <h1>Choisissez une zone</h1>
        
                <ul>
                    <?php $zones=Zone::getAllZonesById($id);
                    foreach ($zones as $zone){
                    ?>   
                
                      
        
                    <li><a href="1-4-BDD-AjouterZoneHasEspece.php?id=<?php echo $plage->id ?>&id2=<?php echo $zone->id  ?>">Zone n°<?php echo $zone->id ?></a></li>
                    
                 
                  <?php  
                 }
                ?>
              
                
        </ul>
    
            </form>
               

               
        
            
    </body>
</html>
