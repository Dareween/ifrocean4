<?php


include_once 'Ifrocean_BDD/Espece.php';





$nomespece = $_POST['nomespece'];
$zone_id = $_POST['zone_id'];
$quantite = $_POST['quantite'];


$esp = new Espece($nomespece);



//Enregistrer en BDD
$esp->Inserer();



//renvoie vers une page
header('location: 13-ListeDesEspeces.php');

