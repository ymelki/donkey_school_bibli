<?php include "header.php";
// 1. création du livre sous forme de tableau
$livre1=[
    "id" => 1,
     "titre" => "le petit poucet"
    ];

// 2. afficher les informations de ce livre issue du tableau
// $livre1["id"] = >1
?>

<h1>Detail du livre n° <?=$livre1['id']?></h1>
<?php 
var_dump($_GET) ?>
<hr>
Titre du livre : 
<?=$livre1['titre']?>
<?php echo $livre1['titre']; ?>
<?php
// creation d'un livre 1 simulé

var_dump($livre1);


?>

<?php include "footer.php"; ?>