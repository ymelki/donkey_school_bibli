<?php

// de creer une connexion à la B.D

// on a besoin de 3 infos qu'on stock dans des variables constantes

// DSN <= mysql:host=localhost;dbname=bibli
// on definit localhost au serveur
// on definit le nom de la B.D
define('DSN', 'mysql:host=localhost;dbname=bibli');

// on doit definir le nom d'utilisateur.
// on le stock dans la variable constant USER
define('USER', 'root');

// on doit definir un mot de passe
// on le stock dans la variable constant PASS
define('PASS', '');


// creer un objet permettant une connexion à la B.D. 
// 
$pdo = new \PDO(DSN, USER, PASS);

 