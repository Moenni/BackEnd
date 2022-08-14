<?php

$a = 10 ;
$b = 12 ;
$c = 13 ;
$d = 10;

$operacion1= (( $a > $b ) || ( $a < $c ) ) && ( ( $a == $c) || ( $a >= $b ) );
echo"<br>";
var_dump($operacion1);

$operacion2=(( $a >= $b ) || ( $a < $d ) ) && ( ( $a >= $d ) && ($c > $d ) );
var_dump($operacion2);
echo"<br>";
$operacion3=!($a == $c ) && ( $c > $b );
var_dump($operacion3);