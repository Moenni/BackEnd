<?php

//-------------------------------------------------------
//--Numeros Enteros
//-------------------------------------------------------
$nroEnteroPositivo= "123";//esto es una declaracion de una variable de un numero entero
$nroEnteroNegativo= -123;// esto es una declaracion de una variable tipo entero negativo
var_dump($nroEnteroPositivo);//var dump permite ver el tipo de datos asociado
echo "<br>";
var_dump($nroEnteroNegativo);

//rango típico(aprox.)
//-2147483648(sistema de 32 bits)
//-9E18 a 9E18 (sistema de 64 bits)

//Si el numero es demasiado largo el compilador lo cambiará automáticamente a reales.
$nroMuyLargo= 456414345235352;
var_dump($nroMuyLargo);

$sum =1+2;
$resta=1-2;
$multiplicacion=1*2;
$division=1/2;
$modulo=1%2;

echo $sum;


