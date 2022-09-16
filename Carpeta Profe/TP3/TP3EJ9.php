<?php

/*Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial.*/
/*
9!=1x2x3x4x5x6x7x8x9
N!=Nx(N-1)X(N-2)....
N!=NX(N-1)!
*/

$N = readline("ingrese el valor de N: ");
$acumulador=1;
 for($i=1;$i<=$N;$i++){
    $acumulador*=$i;
    //1*1
    //1*2
    //2*3
    //6*4
    //24*5
    //120
    echo "$i!= $acumulador". PHP_EOL; //1*2*3*4*5
 }
