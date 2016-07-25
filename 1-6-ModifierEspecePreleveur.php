<?php
include_once 'Ifrocean_BDD/Espece.php';
$id=$_GET["id"];
$espece=Espece::getById($id);




?>

<html>
   <head>
        <meta charset="UTF-8">
        <title>Modifier une espèce</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
       
            
            <div class="container">
                
            <h1>Modifier une espèce</h1>
    
                
          
            
            <hr>
            <form action="13-BDD-POSTModifierEspece.php"
                  method="post">
               
                <div class="form-group row">
                    <label for="id" class="col-sm-2
                           form-control-label">Id</label>
                    <div class="col-sm-2">
                        
                        <input 
                            type="number" required
                               name="id" id="disabledInput" value="<?php echo($espece->id) ?>"
                               class="form-control">
                        <span>Merci de ne pas modifier la valeur de l'id</span>
                    </div>
                    <label for="nomespece" class="col-sm-2
                           form-control-label">Nom de l'espèce</label>
                    <div class="col-sm-2">
                        <input type="text" required
                               name="nomespece" id="nomespece" value="<?php echo($espece->nomespece) ?>"
                               class="form-control">
                    </div>
                </div>
      
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="Enregistrer l'espèce">
                
            </form>
            
                 <div class="col-sm-12"> <a href="13-ListeDesEspeces.php" class="col-sm-offset-6 btn btn-primary" role="button">Revenir à la liste</a>
                </div>
             
        </div>

