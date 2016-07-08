<?php


include_once 'Ifrocean_BDD/Plage.php';





$nomplage = $_POST['nomplage'];
$superficie = $_POST['superficie'];
$ville = $_POST['ville'];
$date_prelevement = $_POST['date_prelevement'];

$pla = new Plage($nomplage, $superficie, $ville, $date_prelevement);



//Enregistrer en BDD
$pla->Inserer();



//renvoie vers une page
header('location: 12-ListeDesPlages.php');

