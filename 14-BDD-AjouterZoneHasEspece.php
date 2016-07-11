<?php
include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Plage.php';
include_once 'Ifrocean_BDD/Espece.php';
include_once 'Ifrocean_BDD/ZoneHasEspece.php';

?>



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
            <form action="14-BDD-POSTAjouterZoneHasEspece.php"
                  method="post">
                <h2>Quantité</h2>
          
                <div class="form-group row">
                    <label for="quantite" class="
                           form-control-label"></label>
                    <div class="col-sm-4">
                        <input type="number" required
                               name="quantite" id="quantite"
                               class="form-control">
                    </div>
                </div>
                <h2>Sélectionner une zone</h2>
            
                     
                     <?php $zones=Zone::getAllZones();
            foreach ($zones as $zone){
            ?>
                 
                     <div class="radio">
                    <label>
                      <input type="radio" name="zone_id" id='zone_id' value="<?php echo $zone->id ?>" checked>
                      Zone n° <?php echo $zone->id ?>
                    </label>
                  </div>
                     
                <?php
            }
            ?>
                
                
                <h2>Sélectionner une espèce</h2>
                 
                     <?php $especes=Espece::getAllEspeces();
            foreach ($especes as $espece){
            ?>
                
                     <div class="radio">
                    <label>
                      <input type="radio" name="espece_id" id='espece_id' value="<?php echo $espece->id ?>" checked>
                      Nom de l'espèce <?php echo $espece->nomespece ?>
                    </label>
                  </div>
                     
                <?php
            }
            ?>
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer">
                
            </form>
        </div>
    </body>
</html>
