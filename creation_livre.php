<?php 
include "header.php"
?>
    <h1>Creation d'un nouveau livre</h1>

    <form action="enregistrer_livre.php" method="POST">
        <br> 
        Titre
        <br>
        <input type="text" id="titre" name="nom_livre" required minlength="4"  size="10">
        <br>
        Nombre de page
        <br>
        <input type="submit" value="Enregistrer">
    </form>



<?php include "footer.php" ?>