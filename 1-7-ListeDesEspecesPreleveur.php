<?php
include_once 'Ifrocean_BDD/Espece.php';

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
        <title>Liste des espèces</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Liste des espèces</h1>
        <table class="table">
            <tr>
                <th>Id</th>
                 <th>Nom de l'espèce</th>  
            
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $especes=Espece::getAllEspeces();
            foreach ($especes as $espece){
            ?>
            <tr>
                <td>Espece N°<?php echo $espece->id ?></td>
                <td><?php echo $espece->nomespece ?></td>
          
                <td><a href="1-6-ModifierEspecePreleveur.php?id=<?php echo $espece->id ?>">Modifier</a></td>
                <td><a href="1-7-SupprimerEspece.php?id=<?php echo $espece->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
        

        <a href="1-5-BDD-AjouterEspecePreleveur.php" class="btn btn-info btn-block btn-lg" role="button">Ajouter une nouvelle espèce</a>
</body>
</html>
