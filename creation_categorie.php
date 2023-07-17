<?php 
include "header.php"
?>
    <h1>Creation d'une nouvelle catégorie</h1>

    <form action="enregistrer_categorie.php" method="POST">
        <br> 
        Titre
        <br>
        <input type="text" id="titre" name="nom_categorie" required minlength="4" maxlength="8" size="10">
        <br>
        Nombre de page
        <br>
        <input type="submit" value="Enregistrer">
    </form>



    <?php include "footer.php" ?>