<?php

// fonction:

// 1: des fonctions qui font quelque chose



// 2: des fonctions qui renvoient quelque chose
// gerer la recuperation de la variable de renvoie
// porté de variable
// vie : local : dans la fonction elle vit que dans la fonction
// vie : global en dehors dans la fonction elle vie toute la page
// vie : si elle superglobal : GET POST SESSION : plusieurs page
// fin de vie : gerer une variable qui est renvoyé par 
// la fonction

$a=5;
$b=5;
//echo $a+$b;

// factoriser le code 

// creer la fonction
function add(int $c,int $d){
    echo $c+$d;
}

//appeller
//add(5,5);

function add2(int $c,int $d){
    return $c+$d;
}
$result=add2(5,5);
echo $result;


// ecrire une fonction
function add3($a,$b){
    return $a+$b;
}

function add4(int $a, int $b):int{
    return 
    $a+$b;
}
function test () : array{
    return ['E'];
}
