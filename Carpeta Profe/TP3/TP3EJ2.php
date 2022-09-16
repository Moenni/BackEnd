<?php

/*Realizar la multiplicacion de dos numeros enteros A y B mediante sumas sucesivas , hacer tres algoritmos con cada estructura repetitiva*/

// 6*4 = 6+6+6+6 =24
//A*B=A+A+A+A = B+B+B+B

$A=readline("Ingrese el valor de A: ");
$B=readline("Ingrese el valor de B: ");


if($B<0){
    $B*=-1; //$B= $B*-1;
    $A*=-1; //$A* -1;
}
/*
echo "$A X $B = $acumuladora";$acumuladora=0;
$contadora=0;

while ($contadora<$B) {
    $acumuladora+=$A;  //$acumuladora= $acumuladora+$A;
    $contadora++; //$contadora=$contadora+1;

}

echo "$A X $B = $acumuladora";
*/
$acumuladora=0;
for($contadora =0;$contadora<$B; $contadora++){
    $acumuladora+=$A;
}
echo "$A X $B = $acumuladora";

