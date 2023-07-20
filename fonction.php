<?php

function getLivreCategorie(int $id_categorie):array{
    $pdo= connexion();
    // 1. query est une variable contenant la requete SQL permettant
    // de recuperer l'ensemble des livres
    $query = "SELECT * FROM livre where categorie_id=:monidprotege
    
    
    ";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':monidprotege', $id_categorie, \PDO::PARAM_INT);
    
    // On utilise statement qui a une méthode (sa propre fonction) permettant
    // de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
    // qui nous permet d'avoir un format de donnée sous forme de tableau
    // associatif
    $statement->execute();
    $tab_entite = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $tab_entite;
}

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
// entree : TABLE, ID
// sortie : tableau 1 livre
// on veut une fonction qui nous renvoie une seul ligne d'une entité
// un seul livre
//         user

function getTableOneLine(string $param_table, int $param_id):array {
    $pdo= connexion();

    $query="SELECT * FROM $param_table WHERE id=:monidprotege";

    // on va preparer la requete
    $statement = $pdo->prepare($query);
    $statement->bindValue(':monidprotege', $param_id, \PDO::PARAM_INT);
    
    // On utilise statement qui a une méthode (sa propre fonction) permettant
    // de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
    // qui nous permet d'avoir un format de donnée sous forme de tableau
    // associatif
    $statement->execute();
    $tab_entite = $statement->fetch(PDO::FETCH_ASSOC);

    return $tab_entite;
}