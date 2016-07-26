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
        <title>Liste des plages</title>

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
                <li><a href="2-0-ChoixDesActions.php">Actions Chercheur</a></li>
               
</ol>
        </header>
        </header>
        <h1>Liste des plages</h1>
        <table class="table">
            <tr>
                
                 <th>Nom de la plage</th>  
                <th>Superficie</th>
                <th>Ville</th>
                <th>Date de prélevement</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
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
                <td><a href="12-VoirPlage.php?id=<?php echo $plage->id ?>">Voir</a></td>
                <td><a href="12-ModifierPlage.php?id=<?php echo $plage->id ?>">Modifier</a></td>
                <td><a href="10-SupprimerPlage.php?id=<?php echo $plage->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
               <a href="12-BDD-AjouterPlage.php" class="btn btn-primary btn-lg active" role="button">Ajouter une autre plage</a>

    </body>
</html>
