<?php


$a = 20 ;
$b = $a ;
$c = 15 ;
$d = 10;

$operacion= (( $a == $b ) || ( $b > $c ) ) || ( $c < $d );
var_dump($operacion);