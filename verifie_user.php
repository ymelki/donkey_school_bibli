<?php include "header.php";

var_dump($_POST);
$pseudo=$_POST['pseudo_user'];
$mdp=$_POST['mdp_user'];
//recuperer la liste des users issue de la B.D.
$query = "SELECT * FROM utilisateur where pseudo = :lepseudo ";
// L'instance PDO (objet) utilise une méthode (fonction spécifique à cet objet)
// permettant d'éxecuter la requête.
// on stocke le resultat dans la variable statement
$statement = $pdo->prepare($query);
$statement->bindValue(':lepseudo', $pseudo, \PDO::PARAM_STR);

// On utilise statement qui a une méthode (sa propre fonction) permettant
// de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
// qui nous permet d'avoir un format de donnée sous forme de tableau
// associatif
$statement->execute();

$users = $statement->fetch();

var_dump($users);


if (empty($users)){
    echo "identifiant inconnu ".$pseudo. " calme toi !";
}
else {
    if ($users['mdp']==$mdp){
        echo "Vous etes connecté !";
    }
    else {
        echo $pseudo." ! tu dois ecrire le bon mdp !";
    }
}



