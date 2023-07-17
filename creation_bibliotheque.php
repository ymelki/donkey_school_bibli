<?php 
include "header.php";
?>
    <h1>Creation d'un nouveau bibliotheque</h1>

    <form action="enregistrer_bibliotheque.php" method="POST">
        <br> 
        Titre
        <br>
        <input type="text" id="titre" name="nom_bibliotheque" required minlength="4" maxlength="8" size="10">
        <br>
        Nombre de page
        <br>
        <input type="submit" value="Enregistrer">
    </form>




    <?php include "footer.php" ?>