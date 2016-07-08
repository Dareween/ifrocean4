<?php

include_once 'Ifrocean_BDD/Triangle.php';
include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Point.php';




$degreLatA = $_POST['latAdegre'];
$minuteLatA = $_POST['latAmin'];
$secondeLatA = $_POST['latAsec'];

$degreLongA = $_POST['longAdegre'];
$minuteLongA = $_POST['longAmin'];
$secondeLongA = $_POST['longAsec'];

$degreLatB = $_POST['latBdegre'];
$minuteLatB = $_POST['latBmin'];
$secondeLatB = $_POST['latBsec'];

$degreLongB = $_POST['longBdegre'];
$minuteLongB = $_POST['longBmin'];
$secondeLongB = $_POST['longBsec'];

$degreLatC = $_POST['latCdegre'];
$minuteLatC = $_POST['latCmin'];
$secondeLatC = $_POST['latCsec'];

$degreLongC = $_POST['longCdegre'];
$minuteLongC = $_POST['longCmin'];
$secondeLongC = $_POST['longCsec'];

$degreLatD = $_POST['latDdegre'];
$minuteLatD = $_POST['latDmin'];
$secondeLatD = $_POST['latDsec'];

$degreLongD = $_POST['longDdegre'];
$minuteLongD = $_POST['longDmin'];
$secondeLongD = $_POST['longDsec'];

$couleur='#000088';

$plage_id= $_POST['plage_id'];






/*couleur=$_POST["couleur"];*/

/*echo "$xa $xb $xc $ya $yb $yc $xd $yd $degreLatA $couleur";*/

$zo = new Zone(
        new Point($degreLatA, $minuteLatA, $secondeLatA, $degreLongA, $minuteLongA, $secondeLongA),
        new Point($degreLatB, $minuteLatB, $secondeLatB, $degreLongB, $minuteLongB, $secondeLongB),
        new Point($degreLatC, $minuteLatC, $secondeLatC, $degreLongC, $minuteLongC, $secondeLongC),
        new Point($degreLatD, $minuteLatD, $secondeLatD, $degreLongD, $minuteLongD, $secondeLongD),
        $plage_id,
        $couleur
        );

$zo->surface=$zo->calculerSurface();

//Enregistrer en BDD
$zo->Inserer();



//renvoie vers une page
header('location: 11-ListeDesZones.php');

