<?php

// --------------------------------
// -- Ternario
// --------------------------------

/*

(expresión) ? resultado1 : resultado2

La expresión ------ (expresión) ? resultado1 : resultado2 ----- evalúa a resultado1
si la expresión es TRUE, y result2 si la expresión es FALSE.

 */

$nota = readline("Ingrese su nota: ");

/* if ($nota >= 6) {
$condicion = "Aprobado";
} else {
$condicion = "Desaprobado";
} */

/* $condicion = ($nota >= 6) ? "Aprobado" : "Desaprobado";

echo "Usted tiene la nota $nota y esta $condicion"; */

echo "Usted tiene la nota $nota y esta ", ($nota >= 6) ? "Aprobado " : "Desaprobado";
