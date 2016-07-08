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
     <div class="container">
            <h1>Ajouter une plage</h1>
            <hr>
            <form action="13-BDD-POSTAjouterEspece.php"
                  method="post">
                <h2>Espece</h2>
                <h3>Nom de l'espèce</h3>
                <div class="form-group row">
                    <label for="nomespece" class="col-sm-2
                           form-control-label">espèce</label>
                    <div class="col-sm-4">
                        <input type="text" required
                               name="nomespece" id="nomespece"
                               class="form-control">
                    </div>
                </div>
                
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer">
                
            </form>
        </div>
    </body>
</html>
