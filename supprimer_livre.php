<?php
include "header.php";
var_dump($_GET);


// recuperation de l'identifiant dans l'url 
$id=$_GET['id'];
// $query="SELECT * FROM livre WHERE id=$id";

$query="DELETE FROM livre WHERE id=:monidprotege";

// on va preparer la requete
$statement = $pdo->prepare($query);
$statement->bindValue(':monidprotege', $id, \PDO::PARAM_INT);

// On utilise statement qui a une méthode (sa propre fonction) permettant
// de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
// qui nous permet d'avoir un format de donnée sous forme de tableau
// associatif
$statement->execute();
$unlivre = $statement->fetch(PDO::FETCH_ASSOC);

// header(location: "livre_livre.php");

