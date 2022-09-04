<?php

$A = 1.0;
$B = 3.0;
$C = 4.0;

echo "hola";
$F = (($A * $B / sqrt($C)) / ($C - (1 / $B))) - 2 * $C / $A;
echo "F = $F ";
echo "<br>"; // Salto de linea para el navegador
echo PHP_EOL; // Salto de linea para scripting
$G = (2 * $A - $B / sqrt($C)) / ($C + 1 / $B) * $B / 4;
echo "G = $G";
