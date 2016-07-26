<?php

include_once 'Ifrocean_BDD/Plage.php';
$id=$_GET["id"];
$plage=Plage::getById($id);




?>




<html>
   <head>
        <meta charset="UTF-8">
        <title>Modifier une étude (plage)</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
       
          
            <div class="container">
            <h1>Modifier une plage</h1>
            <hr>
            <form action="2-2-4-BDD-POSTModifierPlage.php"
                  method="post">
                
                <h3>Informations</h3>
                <div class="form-group row">
                    <label for="nomplage" class="col-sm-2
                           form-control-label">Nom de la plage</label>
                    <div class="col-sm-4">
                        <input type="text" required
                               name="nomplage" id="nomplage"
                               class="form-control" value="<?php echo($plage->nomplage) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ville" class="col-sm-2
                           form-control-label">Ville</label>
                    <div class="col-sm-4">
                        <input type="text" required
                               name="ville" id="ville"
                               class="form-control" value="<?php echo($plage->ville) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="superficie" class="col-sm-2
                           form-control-label">Superficie</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               name="superficie" id="superficie"
                               class="form-control" value="<?php echo($plage->superficie) ?>">
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_prelevement" class="col-sm-2
                           form-control-label">Date du prélèvement</label>
                    <div class="col-sm-4">
                        <input type="date" required
                               name="date_prelevement" id="date_prelevement"
                               class="form-control" value="<?php echo($plage->date_prelevement) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cloturer" class="col-sm-2
                           form-control-label">Cloturer ? : 0 = ouvert / 1 = fermée</label>
                    <div class="col-sm-4">
                        <input type="cloturer" required
                               name="cloturer" id="cloturer"
                               class="form-control" value="<?php echo($plage->cloturer) ?>">
                    </div>
                </div>
                
               <input type="hidden" required
                               name="id" id="disabledInput" value="<?php echo($plage->id) ?>"
                               class="form-control">
              
                    
      
       
                <input class="col-sm-3 btn btn-success" type="submit" value="Valider">
                
       
   
                
            </form>
            
            
        </div>
           
             
        </div>

