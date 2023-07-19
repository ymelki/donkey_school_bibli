<?php

var_dump($_GET);

include "header.php";

// des information du livre correspondant à l'identfiant
// qui est dans l'URL


// recuperation de l'identifiant dans l'url 
$id=$_GET['id'];
// $query="SELECT * FROM livre WHERE id=$id";

$query="SELECT * FROM livre WHERE id=:monidprotege";

// on va preparer la requete
$statement = $pdo->prepare($query);
$statement->bindValue(':monidprotege', $id, \PDO::PARAM_INT);

// On utilise statement qui a une méthode (sa propre fonction) permettant
// de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
// qui nous permet d'avoir un format de donnée sous forme de tableau
// associatif
$statement->execute();
$unlivre = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($unlivre);

?>
    <h1>Modification d'un  livre</h1>

    <form action=enregistrer_modification_livre.php?id=<?=$unlivre['id']?> method="POST">
        <br> 
        Titre
        <br>
        <input type="text" id="titre" name="nom_livre" value="<?=$unlivre['titre'] ?>" required minlength="4" maxlength="8" size="10">
        <br>
        <input type="submit" value="Enregistrer">
    </form>



<?php include "footer.php" ?>