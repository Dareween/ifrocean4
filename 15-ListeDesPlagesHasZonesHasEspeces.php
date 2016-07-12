<?php
include_once 'Ifrocean_BDD/PlagesHasZoneHasEspece.php';

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
              
                <th>Nom plage</th> 
                  <th>Zone Id</th>
                 <th>Nom de l'espèce</th>  
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $plageshaszoneshasespeces=PlageHasZoneHasEspece::getAllPlagesHasZonesHasEspeces();
            foreach ($plageshaszoneshasespeces as $plagehaszone){
            ?>
            <tr>
               
                <td><?php echo $plagehaszone->palges_id ?></td>
                 
                <td><a href="15-VoirPlageHasZoneHasEspece.php?id=<?php echo $plagehaszone->id ?>">Voir</a></td>
                <td><a href="15-ModifierPlageZoneEspece.php?id=<?php echo $plagehaszone->id ?>">Modifier</a></td>
                <td><a href="15-SupprimerPlageZoneHasEspece.php?id=<?php echo $plagehaszone->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
    </body>
</html>
