<?php
include_once 'Ifrocean_BDD/Plage.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter une zone</title>

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
                <li><a href="index.php">Accueil</a></li>
                <li><a href="1-1-ListeDesPlagesPreleveur.php">Sélection plage</a></li>
                <li><a href="1-10-ChoixDesActions.php">Actions zone</a></li>
                <li><a href="1-2-BDD-AjouterZonePreleveur.php">Coordonnées zone</a></li>
</ol>
        </header>
        
     <div class="container">
            <h1>Ajouter une zone</h1>
            <hr>
            
            <form action="11-BDD-POSTAjouterZone.php"
                  method="post">
                <h2>Test Sélectionner une plage : n'enregistre pas l'id dans la base</h2>
                    <?php $plages=Plage::getbyId();
                    foreach ($plages as $plage){
                    ?>   
                <div class="radio">
                    <label>
                      <input type="radio" name="plage_id" id='plage_id' value="<?php echo $plage->id ?>" checked>
                      <?php echo $plage->nomplage ?>
                    </label>
                  </div>
                  <?php  
                 }
                ?>
              
                <h2>Point A</h2>
                <h3>Latitude A</h3>
                <div class="form-group row">
                    <label for="latAdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latAdegre" id="latAdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latAmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latAmin" id="latAmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latAsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="latAsec" id="latAsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude A</h3>
                   <div class="form-group row">
                    <label for="longAdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longAdegre" id="longAdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longAmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longAmin" id="longAmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longAsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longAsec" id="longAsec"
                               class="form-control">
                    </div>
                </div>
                
               
                <h2>Point B</h2>
                <h3>Latitude B</h3>
                <div class="form-group row">
                    <label for="latBdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latBdegre" id="latBdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latBmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latBmin" id="latBmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latBsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latBsec" id="latBsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude B</h3>
                   <div class="form-group row">
                    <label for="longBdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longBdegre" id="longBdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longBmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longBmin" id="longBmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longBsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="longBsec" id="longBsec"
                               class="form-control">
                    </div>
                </div>
                 
                <h2>Point C</h2>
                <h3>Latitude C</h3>
                <div class="form-group row">
                    <label for="latAdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latCdegre" id="latCdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latCmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latCmin" id="latCmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latCsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="latCsec" id="latCsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude C</h3>
                   <div class="form-group row">
                    <label for="longCdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longCdegre" id="longCdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longCmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longCmin" id="longCmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longCsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longCsec" id="longCsec"
                               class="form-control">
                    </div>
                </div>
                
               
                <h2>Point D</h2>
                <h3>Latitude D</h3>
                <div class="form-group row">
                    <label for="latBDegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latDdegre" id="latDdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latDmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latDmin" id="latDmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latDsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latDsec" id="latDsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude D</h3>
                   <div class="form-group row">
                    <label for="longDdegre" class="col-sm-2
                           form-control-label">Degrés</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longDdegre" id="longDdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longDmin" class="col-sm-2
                           form-control-label">Minutes</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longDmin" id="longDmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longDsec" class="col-sm-2
                           form-control-label">Secondes</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longDsec" id="longDsec"
                               class="form-control">
                    </div>
                </div>  
                         
        
       
                <input class="btn btn-info btn-lg btn-block" type="submit" value="Enregistrer la zone">
                <br>
                
            </form>
        </div>
    </body>
</html>
