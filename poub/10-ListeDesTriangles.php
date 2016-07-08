<?php
include_once 'Ifrocean_BDD/Triangle.php';

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
        <title>Liste des triangles</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Liste des triangles</h1>
        <table class="table">
            <tr>
                <th>Triangles</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $triangles=Triangle::getAllTriangles();
            foreach ($triangles as $tri){
            ?>
            <tr>
                <td> Triangle N°<?php echo $tri->id ?></td>
                <td><a href="10-VoirTriangle.php?id=<?php echo $tri->id ?>">Voir</a></td>
                <td><a href="10-ModifierTriangle.php?id=<?php echo $tri->id ?>">Modifier</a></td>
                <td><a href="10-SupprimerTriangle.php?id=<?php echo $tri->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>
    </body>
</html>
