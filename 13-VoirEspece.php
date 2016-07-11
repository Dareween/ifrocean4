<?php
include_once 'Ifrocean_BDD/Espece.php';
$id=$_GET["id"];
$espece=Espece::getById($id);




?>

<html>
   <head>
        <meta charset="UTF-8">
        <title>Consultation d'une espèce</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Consultation d'une espèce</h1>
    
                
          <table class="table">
            <tr>
                <th>Id de l'espèce</th>
                 <th>Nom de l'espèce</th>  
              
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            
            <tr>
                    <td>Espèce n°<?php echo($espece->id); ?></td>
                    <td>Nom : <?php echo($espece->nomespece); ?></td>
                
                <td><a href="13-ModifierEspece.php?id=<?php echo $espece->id ?>">Modifier</a></td>
                <td><a href="13-SupprimerEspece.php?id=<?php echo $espece->id ?>">Supprimer</a></td>
            </tr> 

