<?php
include "header.php";
include "fonction.php"; 

?>
<br >
<?php
 // var_dump($_SESSION);
  
$users=getTable("utilisateur");

  
foreach($users as $monuser){ 
    echo "
    <a href=detail_user.php?id=".$monuser['id'].">user :  ".$monuser['pseudo']."</a>
    <a href=detail_user.php?id=".$monuser['id']."&titre=".$monuser['pseudo'].">user :  ".$monuser['pseudo']."</a>
   - <a href=supprimer_user.php?id=".$monuser['id'].">Supprimer un user</a>
   - <a href=modifier_user.php?id=".$monuser['id'].">modifier un user</a><hr>
   ";

} 
  include "footer.php"; ?>