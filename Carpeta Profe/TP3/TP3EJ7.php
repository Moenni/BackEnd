<?php

/*Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.*/
//2^5 = 2*2*2*2*2
//A^B= a*A*A*A (B veces)

$A=readline("Ingrese el valor de A: ");
$B=readline("Ingrese el valor de B: ");

$acumuladora=1;
for($contadora =0;$contadora<$B; $contadora++){
    $acumuladora*=$A;
}
echo "$A ^ $B = $acumuladora";
