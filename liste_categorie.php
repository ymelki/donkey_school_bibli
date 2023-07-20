<?php
include "header.php"; 
include "fonction.php"; 

$categorie=getTable("categorie");
   
// afficher les livres avec la boucle foreach
//s1 : http://localhost:8080/detail_livre.php?id=1&titre=le%20petit%20poucet
// fonction php necessaire pour garder la chaine malgres les espaces
//s2 : session

foreach($categorie as $macategorie){ 
     echo "<br><a href=categorie_livre.php?id=".$macategorie['id'].">macategorie ".$macategorie['nom']."</a>
     ";

 } 

?>
 
<?php include "footer.php"; ?>