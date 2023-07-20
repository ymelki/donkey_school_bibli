<?php
include "header.php"; 
include "fonction.php"; 

$livres=getTable("livre");
  
echo $livres[0]['id'];
var_dump($livres);
var_dump($livres[0]);
// afficher les livres avec la boucle foreach
//s1 : http://localhost:8080/detail_livre.php?id=1&titre=le%20petit%20poucet
// fonction php necessaire pour garder la chaine malgres les espaces
//s2 : session

foreach($livres as $monlivre){ 
     echo "<a href=detail_livre.php?id=".$monlivre['id'].">Livre ".$monlivre['titre']."</a>
    - <a href=supprimer_livre.php?id=".$monlivre['id'].">Supprimer un livre</a>
    - <a href=modifier_livre.php?id=".$monlivre['id'].">modifier un livre</a><hr>
    ";

 } 

?>

<h1>Liste des livres  
    <?php $nb=1000;?>   
 <?=$nb." livres"; ?>
</h1>

<?php
for ($i=1; $i<=$nb;$i++){ ?>
    <?php echo "<a href=detail_livre.php?id=$i>Livre $i</a>
    - <a href=supprimer_livre.php?id=$i>Supprimer un livre</a>
    - <a href=modifier_livre.php?id=$i>modifier un livre</a><hr>
    "; ?>
     


<?php 
} ?>

<?php include "footer.php"; ?>