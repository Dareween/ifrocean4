<?php

include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Point.php';

$xa=$_POST["xa"];
$xb=$_POST["xb"];
$xc=$_POST["xc"];
$ya=$_POST["ya"];
$yb=$_POST["yb"];
$yc=$_POST["yc"];
$xd=$_POST["yd"];
$yd=$_POST["yd"];
$degreLatA = $_POST['latitude-A-degre'];

$couleur=$_POST["couleur"];

/*echo "$xa $xb $xc $ya $yb $yc $xd $yd $degreLatA $couleur";*/

$zo = new Zone(
        new Point($xa, $ya),
        new Point($xb, $yb),
        new Point($xc, $yc),
        new Point($xd, $yd),
        $degreLatA,
        $couleur
        );


//Enregistrer en BDD
$zo->Inserer();

//renvoie vers une page
header('location: 11-ListeDesZones.php');

