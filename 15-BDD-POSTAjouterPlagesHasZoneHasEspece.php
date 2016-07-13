<?php



include_once 'Ifrocean_BDD/PlageHasZoneHasEspece.php';





/*$nomespece = $_POST['nomespece'];*/
$plages_id = $_POST['plages_id'];
$plages_has_zones_has_especes = $_POST['plages_has_zones_has_especes'];
$zones_has_especes_espece_id = $_POST['zones_has_especes_espece_id'];


/*$esp = new Espece($nomespece);*/
$plages_has_zone_has_espece = new PlageHasZoneHasEspece ($plages_id, $zones_has_especes_zone_id, $zones_has_especes_espece_id);

echo($plage_id);

//Enregistrer en BDD
/*$esp->Inserer();*/
$plages_has_zone_has_espece->Inserer();



//renvoie vers une page
header('location: 15-ListeDesPlagesHasZonesHasEspeces.php');

