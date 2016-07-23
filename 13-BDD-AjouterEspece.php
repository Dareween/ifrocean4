<?php
include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Plage.php';

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter une espece</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
            <header>
            <div class="bandeau1">Projet Ifrocean - Préléveur</div>
            <ol class="breadcrumb">
                <li><a href="0-0-indexAccueil.php">Accueil</a></li>
                <li><a href="1-1-ListeDesPlagesPreleveur.php">Sélection plage</a></li>
                <li><a href="1-10-ChoixDesActions.php">Actions zone</a></li>
                <li><a href="1-2-BDD-AjouterZonePreleveur.php">Coordonées zone</a></li>
                <li><a href="1-3-ListeDesZonesPreveleur.php">Liste zone</a></li>
                <li><a href="14-BDD-AjouterZoneHasEspece.php">Nombre d'individus</a></li>
                <li><a href="13-BDD-AjouterEspece.php">Ajouter nouvelle espèce</a></li>
</ol>
        </header>
     <div class="container">
            <h1>Ajouter une espèce</h1>
            <hr>
            <form action="13-BDD-POSTAjouterEspece.php"
                  method="post">
                <h2>Espèce</h2>
          
                <div class="form-group row">
                    <label for="nomespece" class="col-sm-2
                           form-control-label">Nom espèce</label>
                    <div class="col-sm-4">
                        <input type="text" required
                               name="nomespece" id="nomespece"
                               class="form-control">
                    </div>
                </div>
      
       
                <a href="14-BDD-AjouterZoneHasEspece.php"><input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer"></a>
                
                
            </form>
        </div>
    </body>
</html>
