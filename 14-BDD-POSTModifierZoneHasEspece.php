<?php


include_once 'Ifrocean_BDD/ZoneHasEspece.php';






$nomespece = $_POST['nomespece'];
$id = $_POST['id'];



$esp = new Espece($nomespece, $id);



//Enregistrer en BDD
$esp->Modifier();




//renvoie vers une page
header('location: 13-ListeDesEspeces.php');

