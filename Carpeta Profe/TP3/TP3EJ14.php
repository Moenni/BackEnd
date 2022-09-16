<?php

/*Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares. Hacer tres
versiones, con un bucle: para(for), mientras(while) y repetir(do while). Repetir el ejercicio considerando que el número de
valores se le solicita al usuario.*/

$acumularPar=0;
$acumularImpar=0;
$contadorPar=0;
$contadorImpar=0;

for($i=0; $i < 10;$i++){
    $N=readline("Ingrese un valor: ");
    if($N %2==0){
        $acumularPar +=$N;
        $contadorPar++;
    }else{
        $acumularImpar +=$N;
        $contadorImpar++;
    }
    
}
echo "El promedio de los valores pares es: ".$acumularPar/$contadorPar.PHP_EOL;
echo "El promedio de los valores impares es: ".$acumularImpar/$contadorImpar.PHP_EOL;
