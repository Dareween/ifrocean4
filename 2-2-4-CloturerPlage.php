<?php

include_once 'Ifrocean_BDD/Plage.php';
$id=$_GET["id"];
$plage=Plage::getById($id);


echo($plage->id);


include_once 'Ifrocean_BDD/Espece.php';
$id=$_GET["id"];
$espece=Espece::getById($id);


echo($espece->id);



?>


<html>
   <head>
        <meta charset="UTF-8">
        <title>Cloturer une étude (plage)</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
       
            
            <div class="container">
                
            <h1>Cloturer une étude (plage)</h1>
    
                
          
            
            <hr>
            <form action="2-2-4-BDD-POSTCloturerPlage.php"
                  method="post">
               
                <div class="form-group row">
                    <label for="id" class="col-sm-2
                           form-control-label"></label>
                    <div class="col-sm-0">
                        
                        <input 
                            type="number" required
                               name="id" id="disabledInput" value="<?php echo($plage->id) ?>"
                               class="form-control">
                      
                    </div>
                    <label for="cloturer" class="col-sm-2
                           form-control-label">Cloturer</label>
                    <div class="col-sm-2">
                        <input type="number" required step="1" max="1" min="0"
                               name="cloturer" id="cloturer" value="<?php echo($plage->cloturer) ?>"
                               class="form-control">
                        <?php echo($plage->cloturer) ?>
                    </div>
                </div>
      
       
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="Valider">
                
            </form>
            
            <div class="col-sm-12"> <a href="0-0-indexAccueil.php" class="col-sm-offset-6 btn btn-primary" role="button">Revenir à l'accueil</a>
                </div>
             
        </div>

