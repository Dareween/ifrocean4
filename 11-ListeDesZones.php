<?php
include_once 'Ifrocean_BDD/Zone.php';

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
        <title>Liste des zones</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Liste des zones</h1>
        <table class="table">
            <tr>
                <th>Plages</th>
                <th>Zones</th>
                <th>Nom espece</th>
                <th>Quantité</th>
                 <th>Latitude A</th>
                 <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                  <th>Longitude A</th>
                   <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                  <th>Latitude B</th>
                 <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                  <th>Longitude B</th>
                   <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                   <th>Latitude C</th>
                 <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                  <th>Longitude C</th>
                   <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                   <th>Latitude D</th>
                 <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                  <th>Longitude D</th>
                   <th>degrés</th>
                  <th>minutes</th>
                  <th>secondes</th>
                    
                    
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $zones=Zone::getAllZones();
            foreach ($zones as $zone){
            ?>
            <tr>
                <td> Plage N°<?php echo $zone->plage_id ?></td>
                <td> Zone N°<?php echo $zone->id ?></td> 
                <td>Nom espece : <?php echo $zone->nomespece ?></td>
                <td>Quantité<?php echo $zone->quantite ?></td>
                
                <td>Lat A</td>
                <td><?php echo $zone->lesPoints[0]->degreLat ?>°</td>
                <td> <?php echo $zone->lesPoints[0]->minuteLat ?>'</td>
                <td> <?php echo $zone->lesPoints[0]->secondeLat ?>''</td>
                <td>Long A</td>
                <td><?php echo $zone->lesPoints[0]->degreLong ?>°</td>
                <td><?php echo $zone->lesPoints[0]->minuteLong ?>'</td>
                <td><?php echo $zone->lesPoints[0]->secondeLong ?>''</td>
                <td>Lat B</td>
                <td><?php echo $zone->lesPoints[1]->degreLat ?>°</td>
                <td><?php echo $zone->lesPoints[1]->minuteLat ?>'</td>
                <td><?php echo $zone->lesPoints[1]->secondeLat ?>''</td>
                <td>Long B</td>
                <td><?php echo $zone->lesPoints[1]->degreLong ?>°</td>
                <td><?php echo $zone->lesPoints[1]->minuteLong ?>'</td>
                <td><?php echo $zone->lesPoints[1]->secondeLong ?>''</td>
                <td>Lat C</td>
                 <td><?php echo $zone->lesPoints[2]->degreLat ?>°</td>
                <td><?php echo $zone->lesPoints[2]->minuteLat ?>'</td>
                <td><?php echo $zone->lesPoints[2]->secondeLat ?>''</td>
                <td>Long C</td>
                <td><?php echo $zone->lesPoints[2]->degreLong ?>°</td>
                <td><?php echo $zone->lesPoints[2]->minuteLong ?>'</td>
                <td><?php echo $zone->lesPoints[2]->secondeLong ?>''</td>
                  <td>Lat D</td>
                 <td><?php echo $zone->lesPoints[3]->degreLat ?>°</td>
                <td><?php echo $zone->lesPoints[3]->minuteLat ?>'</td>
                <td><?php echo $zone->lesPoints[3]->secondeLat ?>''</td>
                <td>Long D</td>
                <td><?php echo $zone->lesPoints[3]->degreLong ?>°</td>
                <td><?php echo $zone->lesPoints[3]->minuteLong ?>'</td>
                <td><?php echo $zone->lesPoints[3]->secondeLong ?>''</td>
                

                
                <!-- A créer : voir zone--><td><a href="11-VoirZone.php?id=<?php echo $zone->id ?>">Voir</a></td>
                <!-- A créer : modifier zone--><td><a href="11-ModifierZone.php?id=<?php echo $zone->id ?>">Modifier</a></td>
                <td><a href="11-SupprimerZone.php?id=<?php echo $zone->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
    </body>
</html>
