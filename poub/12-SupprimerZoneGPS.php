<?php
include_once 'Ifrocean_BDD/Zone.php';
$id=$_GET["id"];
$zone=Zone::getById($id);
$zone->supprimer();

header('Location: 10-ListeDesZones.php');


?>

