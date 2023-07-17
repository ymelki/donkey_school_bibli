<?php include "header.php"; ?>

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