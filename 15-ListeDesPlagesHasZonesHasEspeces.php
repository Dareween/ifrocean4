<?php
include_once 'Ifrocean_BDD/PlageHasZoneHasEspece.php';

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
        <title>Liste des prélevements</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
          <header>
            <div class="bandeau1">Projet Ifrocean - Chercheur</div>
            <ol class="breadcrumb">
                <li><a href="0-0-indexAccueil.php">Accueil</a></li>
                <li><a href="0-1-ChoixDesActions.php">Actions Chercheurs</a></li>
               
</ol>
        </header>
        <h1>Total des individus par espèce par plage</h1>
        <table class="table">
            <tr>
              
                    <th>Plage id</th>
        <th>Nom espèce</th> 
                  <th>Total des individus par</br>espèce des zones prélevées</th>
                 <th>Densité par espèce au m2</th>  
                 <th>Extrapolation de la quantité </br>d'individus par espèce par plage</th>  
        
                
            </tr>
            
            <?php $plageshaszoneshasespeces=PlageHasZoneHasEspece::getAllPlagesHasZonesHasEspeces();
            
            foreach ($plageshaszoneshasespeces as $plagehaszone){
                
            ?>
               
            
            <tr>
            
                <td><?php echo $plagehaszone->nomplage ?></td>
              <td><?php echo $plagehaszone->nomespece ?></td>
                <td><?php echo $plagehaszone->sumquantite ?></td>
                <td><?php echo $plagehaszone->sumdensite ?></td>  
                <td><?php echo $plagehaszone->extrapolation ?></td>
                
              </tr>
            
              <?php  
            }
                ?>
        </table>
    </body>
</html>
