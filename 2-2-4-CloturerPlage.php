<?php

include_once 'Ifrocean_BDD/Plage.php';
$id=$_GET["id"];
$plage=Plage::getById($id);




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
                
            <h1>Clôturer une étude (plage)</h1>
    
                
          
            
            <hr>
            <h2>Statut de l'étude</h2>
            
            <div>L'étude est actuellement
            <?php 
            if($plage->cloturer==1){
                echo('fermée');
            }else{
                echo('ouverte');
            }
            ?>
            </div>
            <div>Pour changer son statut, cliquez sur l'un des boutons et validez.
                L'étude ne sera plus disposnible aux préleveurs si vous la fermer mais vous pourrez toujours la consulter.</div>
            <form action="2-2-4-BDD-POSTCloturerPlage.php"
                  method="post">
              
                <div class="radio">
                <label>
                 <input type="radio" name="cloturer" id="cloturer" value="0">
                 Ouverte
                </label>
                </div>
                <div class="radio">
                <label>
                 <input type="radio" name="cloturer" id="cloturer" value="1">
                Fermée
                </label>
                </div>
                <div>
                        <input type="hidden" required
                               name="id" id="disabledInput" value="<?php echo($plage->id) ?>"
                               class="form-control">
                    </div>
                    
      
       
                <input class="col-sm-3 btn btn-success" type="submit" value="Valider">
                
            </form>
            
           
             
        </div>

