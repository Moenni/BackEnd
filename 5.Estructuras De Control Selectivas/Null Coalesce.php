<?php

// --------------------------------
// -- Coalescencia nula
// --------------------------------

/*

$a ?? "Valor por defecto"

La idea es que si el primer valor es null entonces tomará el segundo valor.
Si ese valor es null tomará el siguiente valor.

 */

$cargo = $cargo ?? "Empleado común";
echo "El cago que ocupa la persona es : $cargo";
