<?php


include_once 'Ifrocean_BDD/Espece.php';
include_once 'Ifrocean_BDD/ZoneHasEspece.php';





/*$nomespece = $_POST['nomespece'];*/
$zone_id = $_POST['zone_id'];
$espece_id = $_POST['espece_id'];
$quantite = $_POST['quantite'];


/*$esp = new Espece($nomespece);*/
$zone_has_espece = new ZoneHasEspece ($zone_id, $espece_id, $quantite);
/*echo($espece_id);
echo($zone_id);
echo($quantite);*/

//Enregistrer en BDD
/*$esp->Inserer();*/
$zone_has_espece->Inserer();



//renvoie vers une page
header('location: 14-ListeDesZonesHasEspeces.php');

