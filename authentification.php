<?php 
include "header.php"
?>
    <h1>Authentification d'un user</h1>

    <form action="verifie_user.php" method="POST">
        <br> 
        Pseudo
        <br>
        <input type="text" id="titre" name="pseudo_user" required minlength="4" maxlength="8" size="10">
        <br>
        Mot de passe
        <br>
        <input type="password" name="mdp_user">
        <br>
        <input type="submit" value="Connexion">
    </form>



<?php include "footer.php" ?>