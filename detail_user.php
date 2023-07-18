<?php include "header.php";
// solution n1 avec les données en GET
echo "Vous avez cliquez sur le user n°".$_GET['id']. "avec le pseudo ".$_GET['titre']  ;

// solution n2 on recupere uniquement l'id de l'url
// et avec la session on recuperer l' user correspondant

// recuperation de l'identifiant via l'url
// on fait -1 pour etre coherent avec les indices du tableau
$id=$_GET['id']-1;
// on recupere les données de la session
// en precisant l'ID
$monuser=$_SESSION['user'][$id];
echo "Vous avez cliquez sur le user n°".$_GET['id']. "avec le pseudo ".$monuser['pseudo']  ;
