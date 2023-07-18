<?php 
include "header.php"
?>
    <h1>Creation d'un nouveau user</h1>

    <form action="enregistrer_user.php" method="POST">
        <br> 
        Titre
        <br>
        <input type="text" id="titre" name="pseudo_user" required minlength="4" maxlength="8" size="10">
        <br>
        Mot de passe
        <br>
        <input type="password" name="mdp_user">
        <br>
        <input type="submit" value="Enregistrer">
    </form>



<?php include "footer.php" ?>