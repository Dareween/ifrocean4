<?php


include_once 'Ifrocean_BDD/Espece.php';
include_once 'Ifrocean_BDD/ZoneHasEspece.php';
include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Plage.php';






$zone_id = $_POST['zone_id'];
$espece_id = $_POST['espece_id'];
$quantite = $_POST['quantite'];
$plage_id = $_POST['plage_id'];



$zone_has_espece = new ZoneHasEspece ($zone_id, $espece_id, $plage_id, $quantite);



$zone=Zone::getById($zone_id);
$surface=$zone->calculerSurface();


$zone_has_espece->densite_zone=$zone_has_espece->calculerDensite($surface,$quantite);

/*echo("zone_id".$zone_id."<br>");
echo("espece_id".$espece_id."<br>");
echo("plage_id".$plage_id."<br>");
echo("densité".$zone_has_espece->densite_zone);*/



//Enregistrer en BDD

$zone_has_espece->Inserer();




//renvoie vers une page
header('location: 1-4-ListeDesZonesHasEspeces.php');


