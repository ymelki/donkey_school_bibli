<?php
include "header.php"; ?>

<?php
 // var_dump($_SESSION);
    
    //1. liste des livres
    $users=[
        0 => [
            "id"=>1,
            "pseudo" => "yoel1",
            "mdp" => "123456"
        ],
        1 => [
            "id"=>2,
            "pseudo" => "yoel2",
            "mdp" => "123456"
        ],
        2 => [
            "id"=>3,
            "pseudo" => "yoel3",
            "mdp" => "123456"
        ],
    ];
var_dump($users);
$_SESSION['users']=$users;
 
foreach($users as $monuser){ 
    echo "
    <a href=detail_user.php?id=".$monuser['id'].">user :  ".$monuser['pseudo']."</a>
    <a href=detail_user.php?id=".$monuser['id']."&titre=".$monuser['pseudo'].">user :  ".$monuser['pseudo']."</a>
   - <a href=supprimer_user.php?id=".$monuser['id'].">Supprimer un user</a>
   - <a href=modifier_user.php?id=".$monuser['id'].">modifier un user</a><hr>
   ";

} 
  include "footer.php"; ?>