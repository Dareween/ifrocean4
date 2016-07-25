<?php
include_once 'Ifrocean_BDD/Plage.php';

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
        <title>Sélectionner une plage</title>

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
                <li><a href="0-0-indexAccueil.php">Accueil</a></li>
                <li><a href="1-1-ListeDesPlagesPreleveur.php">Sélection plage</a></li>
</ol>
        </header>
        <h1>Sélectionner une plage</h1>
        <form action="1-2-BDD-AjouterZonePreleveur.php"
                  method="post">
                
                    <?php $plages=Plage::getAllPlages();
                    foreach ($plages as $plage){
                    ?>   
                <div class="radio">
                    <label>
                      <input type="radio" name="plage_id" id='plage_id' value="<?php echo $plage->id ?>" checked>
                      <?php echo $plage->nomplage ?>
                    </label>
                  </div>
                  <?php  
                 }
                ?>
              
                
        
       
    <button type="submit" class="btn btn-warning btn-block btn-lg">Sélectionner la plage</button>
                <br>
                
            </form>
               

               
        
            
    </body>
</html>
