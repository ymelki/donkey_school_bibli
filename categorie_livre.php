<?php
include "header.php"; 
include "fonction.php"; 
$idcategorie=$_GET['id'];
$livres=getLivreCategorie($idcategorie);
// var_dump($livres);
foreach($livres as $monlivre){ 
    echo "<a href=detail_livre.php?id=".$monlivre['id'].">Livre ".$monlivre['titre']."</a>
   - <a href=supprimer_livre.php?id=".$monlivre['id'].">Supprimer un livre</a>
   - <a href=modifier_livre.php?id=".$monlivre['id'].">modifier un livre</a><hr>
   ";

} 