<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter un zone</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
          
        <div class="container">
            <h1>Ajouter une zone</h1>
            <hr>
            <form action="13-BDD-POSTAjouterZoneGPS.php"
                  method="post">
                <h2>Point A</h2>
                <h3>Latitude Point A</h3>
                <div class="form-group row">
                    <label for="latitude-A-degre" class="col-sm-2
                           form-control-label">latitude-A-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-A-degre" id="latitude-A-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-A-minute" class="col-sm-2
                           form-control-label">latitude-A-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-A-minute" id="latitude-A-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-A-seconde" class="col-sm-2
                           form-control-label">latitude-A-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="latitude-A-seconde" id="latitude-A-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point A</h3>
                   <div class="form-group row">
                    <label for="longitude-A-degre" class="col-sm-2
                           form-control-label">longitude-A-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-A-degre" id="longitude-A-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-A-minute" class="col-sm-2
                           form-control-label">longitude-A-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-A-minute" id="longitude-A-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-A-seconde" class="col-sm-2
                           form-control-label">longitude-A-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longitude-A-seconde" id="longitude-A-seconde"
                               class="form-control">
                    </div>
                </div>
                
               
                <h2>Point B</h2>
                <h3>Latitude Point B</h3>
                <div class="form-group row">
                    <label for="latitude-B-degre" class="col-sm-2
                           form-control-label">latitude-B-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-B-degre" id="latitude-B-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-B-minute" class="col-sm-2
                           form-control-label">latitude-B-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-B-minute" id="latitude-B-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-B-seconde" class="col-sm-2
                           form-control-label">latitude-B-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latitude-B-seconde" id="latitude-B-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point B</h3>
                   <div class="form-group row">
                    <label for="longitude-B-degre" class="col-sm-2
                           form-control-label">longitude-B-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-B-degre" id="longitude-B-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-B-minute" class="col-sm-2
                           form-control-label">longitude-B-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-B-minute" id="longitude-B-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-B-seconde" class="col-sm-2
                           form-control-label">longitude-B-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="longitude-B-seconde" id="longitude-B-seconde"
                               class="form-control">
                    </div>
                </div>
                 
                 
                 <h2>Point C</h2>
                <h3>Latitude Point C</h3>
                <div class="form-group row">
                    <label for="latitude-C-degre" class="col-sm-2
                           form-control-label">latitude-D-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-C-degre" id="latitude-C-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-C-minute" class="col-sm-2
                           form-control-label">latitude-C-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-C-minute" id="latitude-C-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-C-seconde" class="col-sm-2
                           form-control-label">latitude-C-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latitude-C-seconde" id="latitude-C-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point C</h3>
                   <div class="form-group row">
                    <label for="longitude-D-degre" class="col-sm-2
                           form-control-label">longitude-C-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-C-degre" id="longitude-C-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-C-minute" class="col-sm-2
                           form-control-label">longitude-C-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-C-minute" id="longitude-C-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-DC-seconde" class="col-sm-2
                           form-control-label">longitude-C-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="longitude-C-seconde" id="longitude-C-seconde"
                               class="form-control">
                    </div>
                </div>
                 
                 
                     <h2>Point D</h2>
                <h3>Latitude Point D</h3>
                <div class="form-group row">
                    <label for="latitude-D-degre" class="col-sm-2
                           form-control-label">latitude-D-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-D-degre" id="latitude-D-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-D-minute" class="col-sm-2
                           form-control-label">latitude-D-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-D-minute" id="latitude-D-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-D-seconde" class="col-sm-2
                           form-control-label">latitude-D-seconde</label>
                    <div class="col-sm-4">
                        <input type="number"required
                               step="0.01"  name="latitude-D-seconde" id="latitude-D-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point D</h3>
                   <div class="form-group row">
                    <label for="longitude-D-degre" class="col-sm-2
                           form-control-label">longitude-D-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-D-degre" id="longitude-D-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-D-minute" class="col-sm-2
                           form-control-label">longitude-D-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-D-minute" id="longitude-D-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-D-seconde" class="col-sm-2
                           form-control-label">longitude-D-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.0001"  name="longitude-D-seconde" id="longitude-D-seconde"
                               class="form-control">
                    </div>
                </div>
                 
        
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer">
                
            </form>
        </div>
        
    </body>
</html>
