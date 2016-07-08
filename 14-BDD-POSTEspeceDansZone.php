<?php


include_once 'Ifrocean_BDD/Espece.php';





$nomespece = $_POST['nomespece'];


$esp = new Espece($nomespece);



//Enregistrer en BDD
$esp->InsererEspeceDansZone();



//renvoie vers une page
header('location: 14-ListeDesEspeces.php');

