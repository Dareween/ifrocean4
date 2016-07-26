<?php
include_once 'Ifrocean_BDD/Plage.php';
$id=$_GET["id"];
$plage=Plage::getById($id);
$plage->supprimer();

header('Location: 2-3-ListeDesPlagesChercheur.php');


?>

