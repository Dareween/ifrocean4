<?php
include_once 'Ifrocean_BDD/Espece.php';

$id=$_GET["id"];
$espece=Espece::getById($id);
$espece->supprimer();

header('Location: 13-ListeDesEspeces.php');


?>

