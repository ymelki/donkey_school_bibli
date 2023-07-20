<?php


function getTable( string  $matable) : array {
    $pdo= connexion();
    // 1. query est une variable contenant la requete SQL permettant
    // de recuperer l'ensemble des livres
    $query = "SELECT * FROM $matable";
    // L'instance PDO (objet) utilise une méthode (fonction spécifique à cet objet)
    // permettant d'éxecuter la requête.
    // on stocke le resultat dans la variable statement
    $statement = $pdo->query($query);
    // On utilise statement qui a une méthode (sa propre fonction) permettant
    // de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
    // qui nous permet d'avoir un format de donnée sous forme de tableau
    // associatif
    $tab_entite = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $tab_entite;
}