<?php include "header.php";
include "fonction.php";
;

// recuperation de l'identifiant dans l'url 
$id=$_GET['id'];
$unlivre=getTableOneLine("livre", $id);
var_dump($unlivre);

/*
 $statement = $pdo->prepare($query);
$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
$statement->execute();
$friends = $statement->fetchAll();
 */


// affiche "vous avez cliquez sur le livre n 1."
echo "Vous avez cliquez sur le livre n°".$unlivre['id'];

echo "<hr>titre : ".$unlivre['titre'];
  
 