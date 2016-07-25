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
        <table class="table">
            <tr>
                
                <th>Nom de la plage</th>  
                <th>Superficie</th>
                <th>Ville</th>
                <th>Date de prélevement</th>
               
                
            </tr>
            <?php $plages=Plage::getAllPlages();
            foreach ($plages as $plage){
            ?>
            <tr>
                
                <td><?php echo $plage->nomplage ?></td>
                <td><?php echo $plage->superficie ?></td>
                <td><?php echo $plage->ville ?></td>
                <td><?php echo $plage->date_prelevement ?></td>
                <td><?php echo $plage->id ?></td>
                
            </tr> 
            
              <?php  
            }
                ?>
        </table>
               

               
        <a href="1-10-ChoixDesActions.php"><button type="submit" class="btn btn-warning btn-block">Sélectionner</button></a>
            
    </body>
</html>
