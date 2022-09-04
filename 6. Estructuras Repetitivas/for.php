<?php
define('SALTO','<br>'.PHP_EOL);

// --------------------------------
// -- Bucle For
// --------------------------------

/*

Sintaxis del bucle for

for (expr1; expr2; expr3)
{
//código
}

La primera expresión se ejecuta una vez al principio del bucle.
La mayor parte de las veces se trata de un valor puesto a cero.
La segunda expresión es una declaración condicional, que se evalúa al principio del bucle en cada iteración.
Si la expresión es verdadera, se ejecuta el código dentro de los paréntesis.
La tercera expresión se ejecuta al final de cada una de las iteraciones del bucle.

 */

// PHP_EOL = <br> = Salto de linea
for($contador = 1; $contador <= 10; $contador++){
    echo "Valor de contador:" . $contador . SALTO;
}
