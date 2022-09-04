<?php

define('SALTO','<br>'.PHP_EOL);
// --------------------------------
// -- Bucle While - Do While
// --------------------------------

/*

La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.

while (expresión)
{
//código
}

SIEMPRE EJECUTA EL CODIGO AL MENOS UNA VEZ
do{
//código
}while (expresión);

*/
/* 
while(true){ // bucle infinito: No ejecuten esto
    echo "Hola mundo";
} */

//Bucle con un $contador
echo "<br>  while <br><br>";

$contador = 1;
while($contador <= 10){
    echo "Valor de contador:" . $contador . SALTO;
    /* if ($contador == 8) { break; }  permite cortar la ejecución de la estructura*/
    $contador++;
}

echo "<br> do while <br><br>";

$contador = 1;
do{
    echo "Valor de contador:" . $contador . SALTO;
    $contador++;
}while($contador <= 10);