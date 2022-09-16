<?php

/*Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente
hasta 2.*/

$N=readline("Ingrese N: ");
if ($N % 2 == 0) {
    for (;$N>=2;$N-=2) {
        echo "N = $N". PHP_EOL;
    }
}else{
    echo "El valor ingresado de N no es par";
}