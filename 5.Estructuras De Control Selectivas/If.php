<?php

// --------------------------------
// -- Declaración If/else - Si/Sino
// --------------------------------

/*

Esto permite la ejecución condicional.

Piensa en ello como una pregunta de sí/no. Si es verdadera, ejecuta el código.
Si no es verdadera, ejecuta el código en la sección else (si se proporciona una).

 */

$edad = 17;
$salario1 = 100000;
$salario = 200000;

/* if ($edad >= 21) {
echo "al tener $edad años, puede cobrar $salario2";
} */

if ($edad >= 21) {
    echo "al tener $edad años, puede cobrar $salario";
} else { // $edad < 21 || $edad <=20
    echo "al tener $edad años, puede cobrar $salario1";
}
echo "<br>";
// para acceder a un prestamo debo ser mayor de edad y tener un salario mayor a 150mil
if ($edad >= 18 || $salario > 190000) {
    echo "Puede acceder al prestamo";
} else {
    echo "NO puede acceder al prestamo";
}
