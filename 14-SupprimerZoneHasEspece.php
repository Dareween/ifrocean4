<?php
include_once 'Ifrocean_BDD/ZoneHasEspece.php';
$id_zhe=$_GET["id_zhe"];
$zonehasespece=ZoneHasEspece::getById($id_zhe);
$zonehasespece->supprimer();

header('Location: 14-ListeDesZonesHasEspeces.php');


?>

