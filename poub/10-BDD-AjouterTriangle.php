<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter un triangle</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <h1>Ajouter un triangle</h1>
            <hr>
            <form action="10-BDD-POSTAjouterTriangle.php"
                  method="post">
                <h2>Point A</h2>
                <div class="form-group row">
                    <label for="xa" class="col-sm-2
                           form-control-label">X</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="xa" id="xa"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ya" class="col-sm-2
                           form-control-label">Y</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="ya" id="ya"
                               class="form-control">
                    </div>
                </div>
                
                <h2>Point B</h2>
                <div class="form-group row">
                    <label for="xb" class="col-sm-2
                           form-control-label">X</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="xb" id="xb"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="yb" class="col-sm-2
                           form-control-label">Y</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="yb" id="yb"
                               class="form-control">
                    </div>
                </div>
                
                <h2>Point C</h2>
                <div class="form-group row">
                    <label for="xc" class="col-sm-2
                           form-control-label">X</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="xc" id="xc"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="yc" class="col-sm-2
                           form-control-label">Y</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="yc" id="yc"
                               class="form-control">
                    </div>
                </div>
                <h2>Couleur</h2>
                 <div class="form-group row">
                     <label for="couleur" class="col-sm-2
                           form-control-label">Choissez une couleur</label>
                    <div class="col-sm-4">
                        <input type="color"required id="couleur" name="couleur" class="form-control">
                    </div>
                 
                 </div>
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer">
                
            </form>
        </div>
    </body>
</html>
