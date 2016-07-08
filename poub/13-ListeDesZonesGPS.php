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
                <th>Zones</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $zones=Zone::getAllZones();
            foreach ($zones as $zone){
            ?>
            <tr>
                <td> Zone N°<?php echo $zone->id ?></td>
                <td><a href="10-VoirZone.php?id=<?php echo $zone->id ?>">Voir</a></td>
                <td><a href="10-ModifierZone.php?id=<?php echo $zone->id ?>">Modifier</a></td>
                <td><a href="10-SupprimerZone.php?id=<?php echo $zone->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
    </body>
</html>
