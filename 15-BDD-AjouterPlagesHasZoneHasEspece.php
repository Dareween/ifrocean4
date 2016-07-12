<?php
include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Plage.php';
include_once 'Ifrocean_BDD/Espece.php';
include_once 'Ifrocean_BDD/ZoneHasEspece.php';
include_once 'Ifrocean_BDD/PlageHasZoneHasEspece.php';

?>
s


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Nouveau prélevement</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
     <div class="container">
            <h1>Nouveau prélevement</h1>
            <hr>
            <form action="15-BDD-POSTAjouterPlagesHasZoneHasEspece.php"
                  method="post">
                <h2>plages_id</h2>
          
                <div class="form-group row">
                    <label for="plages_id" class="
                           form-control-label"></label>
                    <div class="col-sm-4">
                        <input type="number" required
                               name="plages_id" id="plages_id"
                               class="form-control">
                    </div>
                </div>
                
                
               <h2>plages_has_zones_has_especes</h2>
          
                <div class="form-group row">
                    <label for="plages_has_zones_has_especes" class="
                           form-control-label"></label>
                    <div class="col-sm-4">
                        <input type="number" required
                               name="plages_has_zones_has_especes" id="plages_has_zones_has_especes"
                               class="form-control">
                    </div>
                </div>
               
               <h2>zones_has_especes_espece_id</h2>
          
                <div class="form-group row">
                    <label for="zones_has_especes_espece_id" class="
                           form-control-label"></label>
                    <div class="col-sm-4">
                        <input type="number" required
                               name="zones_has_especes_espece_id" id="zones_has_especes_espece_id"
                               class="form-control">
                    </div>
                </div>
                
                
                
                
               
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer">
                
            </form>
        </div>
    </body>
</html>
