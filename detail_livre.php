<?php include "header.php";

$livre1=[
    "id" => $_GET['id'],
     "titre" => "le petit poucet"
    ];

// affiche "vous avez cliquez sur le livre n 1."
echo "Vous avez cliquez sur le livre n°".$livre1['id'];

echo "<hr>titre : ".$livre1['titre'];

// ex sur les sessions
var_dump($_SESSION['livres']);
// $num recupere l'identifiant de l'URL -1 pour etre coherent avec
// les indices du tableau d'origine
$num=$_GET['id']-1;
var_dump($_SESSION['livres'][$num]);

echo "<hr>";
echo $_GET['titre'];