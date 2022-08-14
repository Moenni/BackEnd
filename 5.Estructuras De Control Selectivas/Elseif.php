<?php

// --------------------------------
// -- Else If - Si no es verdadera, pero si es verdadera la siguiente, ejecuta el código.
// --------------------------------

/*

Puede tener una comprobación condicional adicional ampliando la sentencia if para incluir el elseif.

Tenga en cuenta que se ejecutará la comprobación condicional que devuelva primero true.

 */

$edad = 20;
$salario =361000;

if ($salario < 42240) {
    echo "Usted cobra menos del salario minimo";
} else if ($salario < 90000) {
    echo "Usted NO cobra lo minimo para no ser pobre";
} else if ($salario < 180000) {
    echo "Estas cobrando algo relativamente bien";
} else if ($salario < 360000) {
    echo "Estas cobrando muy bien amigo";
} else {
    echo "Lo va a ir a buscar la afip para hacerle algunas preguntas";
}
