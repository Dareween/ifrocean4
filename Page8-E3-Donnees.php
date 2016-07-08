<?php 
include('head.php');
include_once 'Zone.php';


?>
<body>
<div class="container">
<div class="row">
<header>
<div class="bandeau1">Projet Ifrocean - préleveur</div>
  <ol class="breadcrumb">
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="#">Choix de la plage</a></li>
                  <li><a href="#">Données GPS</a></li>
                  <li><a href="#">Données prélèvements</a></li>
				</ol>
<h1 class="bandeau2">Etape 3 : Données</h1>
</header>
<table border="1">
  <tr>
    <td>Noms des espèces</td>
    <td>Nombre total</td>
    <td>Choisissez</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button class="buttonValider">Valider</button>
      <button class="buttonModifier">Modifier</button>
      <button class="buttonSupprimer">Supprimer</button></td>
  </tr>
  <tr></tr>
  <tr></tr>
</table>
<br>
<button class="buttonContinuerPlusTard">Continuer plus tard</button>
<button class="buttonEnvoyerData">Envoyer les données</button>
<button class="buttonAjouterLigne">Ajouter une nouvelle ligne</button>
</div>
</div>
    
    <h1>Liste des zones</h1>
        <table class="table">
            <tr>
                <th>Zones</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
           
            <?php $zones=Zone::getAllZones();
            foreach ($zones as $zone){
            ?>
            <tr>
                <td> Zone N°<?php echo $zone->id ?></td>
               
                <td> Zone N°<?php echo $zone[1] ?></td>
                <td> <?php echo ($zone->lesPoints[0]->degreLat) ?></td>
                
                <td><a href="10-VoirTriangle.php?id=<?php echo $zone->id ?>">Voir</a></td>
                <td><a href="10-ModifierTriangle.php?id=<?php echo $zone->id ?>">Modifier</a></td>
                <td><a href="10-SupprimerTriangle.php?id=<?php echo $zone->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>

    
</body>
</html>
