<?php
include_once 'Ifrocean_BDD/Triangle.php';
$id=$_GET["id"];
$tri=Triangle::getById($id);
$tri->supprimer();

header('Location: 10-ListeDesTriangles.php');


?>

