<?php

// 1. se connecter à la B.D.
include "header.php";
// 2. modifier la ligne avec les données saisi par le user pour ce
// livre precisement.


// recuperation de l'identifiant dans l'url du livre que je veux modifié
$id=$_GET['id'];
// $query="SELECT * FROM livre WHERE id=$id";
$titre=$_POST['nom_livre'];
$query=" UPDATE livre SET titre = :montitre  WHERE id=:monidprotege";

// on va preparer la requete
$statement = $pdo->prepare($query);
$statement->bindValue(':monidprotege', $id, \PDO::PARAM_INT);
$statement->bindValue(':montitre', $titre, \PDO::PARAM_STR);

// On utilise statement qui a une méthode (sa propre fonction) permettant
// de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
// qui nous permet d'avoir un format de donnée sous forme de tableau
// associatif
$statement->execute();
$unlivre = $statement->fetch(PDO::FETCH_ASSOC);
// renvoyé la liste des livre avec un header location
