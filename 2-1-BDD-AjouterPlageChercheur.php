<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter une plage</title>

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
                <li><a href="0-1-ChoixDesActions.php">Actions Chercheur</a></li>
               
</ol>
        </header>
     <div class="container">
            <h1>Ajouter une plage</h1>
            <hr>
            <form action="12-BDD-POSTAjouterPlage.php"
                  method="post">
                <h2>Plage</h2>
                <h3>Informations</h3>
                <div class="form-group row">
                    <label for="nomplage" class="col-sm-2
                           form-control-label">Nom de la plage</label>
                    <div class="col-sm-4">
                        <input type="text" required
                               name="nomplage" id="nomplage"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ville" class="col-sm-2
                           form-control-label">Ville</label>
                    <div class="col-sm-4">
                        <input type="text" required
                               name="ville" id="ville"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="superficie" class="col-sm-2
                           form-control-label">Superficie</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               name="superficie" id="superficie"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_prelevement" class="col-sm-2
                           form-control-label">Date du prélevement</label>
                    <div class="col-sm-4">
                        <input type="date" required
                               name="date_prelevement" id="date_prelevement"
                               class="form-control">
                    </div>
                </div>
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="Enregistrer la plage">
                
            </form>
            
            
        </div>
    </body>
</html>
