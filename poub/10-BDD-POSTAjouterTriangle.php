<?php

include_once 'Ifrocean_BDD/Triangle.php';
include_once 'Ifrocean_BDD/Point.php';

$xa=$_POST["xa"];
$xb=$_POST["xb"];
$xc=$_POST["xc"];
$ya=$_POST["ya"];
$yb=$_POST["yb"];
$yc=$_POST["yc"];

$couleur=$_POST["couleur"];

//echo "$xa $xb $xc $ya $yb $yc $couleur";

$tri = new Triangle(
        new Point($xa, $ya),
        new Point($xb, $yb),
        new Point($xc, $yc),
        $couleur
        );

//Enregistrer en BDD
$tri->Inserer();

//renvoie vers une page
header('location: 10-ListeDesTriangles.php');

