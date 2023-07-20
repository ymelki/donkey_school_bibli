<?php
include "header.php";


// recuperation de l'identifiant dans l'url 
$titre=$_POST['nom_livre'];
// $query="SELECT * FROM livre WHERE id=$id";
echo htmlentities($titre);
$query="INSERT INTO livre (titre) VALUES (:titre)";

// on va preparer la requete
$statement = $pdo->prepare($query);
$statement->bindValue(':titre', $titre);

// On utilise statement qui a une méthode (sa propre fonction) permettant
// de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
// qui nous permet d'avoir un format de donnée sous forme de tableau
// associatif
$statement->execute();

  var_dump($_POST);
?>
