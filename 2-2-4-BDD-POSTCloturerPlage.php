<?php


include_once 'Ifrocean_BDD/Plage.php';



$nomplage = $_POST['nomplage'];
$superficie = $_POST['superficie'];
$ville = $_POST['ville'];
$date_prelevement = $_POST['date_prelevement'];
$cloturer = $_POST['cloturer'];
$id = $_POST['id'];

$pla = new Plage($nomplage, $superficie, $ville, $date_prelevement, $cloturer, $id);

echo($ville);

//Enregistrer en BDD
$pla->Cloturer();



//renvoie vers une page
header('location: 2-2-ListeDesPlagesConsulterModifierChercheur.php');

