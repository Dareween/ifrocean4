<?php
include_once 'Ifrocean_BDD/ZoneHasEspece.php';

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
        <h1>Liste des prélevements</h1>
        <table class="table">
            <tr>
                <th>Nom de la plage</th>
                <th>Id du prélevement</th> 
                  <th>Id de la zone</th>
                 <th>Id de l'espèce</th>
                 <th>Nom de l'espèce</th> 
                 <th>Quantité</th>
                 <th>Densité</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $zonehasespeces=ZoneHasEspece::getAllZonesHasEspeces();
            foreach ($zonehasespeces as $zonehasespece){
            ?>
            <tr>
               <td></td>
                <td>Prélevement : <?php echo $zonehasespece->id_zhe ?></td>
                 <td>Zone N°<?php echo $zonehasespece->zone_id ?></td>
                 <td>Espece N°<?php echo $zonehasespece->espece_id ?></td>
                 <td><?php echo $zonehasespece->nomespece ?></td>
                <td><?php echo $zonehasespece->quantite ?></td>
                <td><?php echo $zonehasespece->densite_zone ?></td>
                
                <td><a href="14-VoirZoneHasEspece.php?id=<?php echo $zonehasespece->id_zhe ?>">Voir</a></td>
                <td><a href="14-ModifierZoneEspece.php?id=<?php echo $zonehasespece->id_zhe ?>">Modifier</a></td>
                <td><a href="14-SupprimerZoneHasEspece.php?id_zhe=<?php echo $zonehasespece->id_zhe ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
    </body>
</html>
