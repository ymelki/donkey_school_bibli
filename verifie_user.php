<?php include "header.php";

var_dump($_POST);

// 1. verifie si le pseudo est bien présent dans le tableau de session
 // recuperation de la session
$users=$_SESSION['user'];

// on est deconnecte . on verifie le user
// var_dump($users);
foreach($users as $monuser){  
    if ($monuser['pseudo']== $_POST['pseudo_user']  ){
        $user_sucess=$monuser;
        break;
    } 
} 
if (empty($user_sucess)){
    echo "User inexistant:   va vraiment te calmer !";
}
else {
    var_dump($user_sucess);
 
    // si user OK on verifie le MDP
    if (($user_sucess['mdp'])==($_POST['mdp_user'])) {
        echo "bravo!";
    }
    else {
        echo "User OK mais MDP KO calme toi ! ";
    }
}