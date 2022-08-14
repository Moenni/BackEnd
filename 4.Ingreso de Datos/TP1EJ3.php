<?php

$a=33;

$operacion= !(true&& false);
var_dump($operacion);

$oparacion2= !(( $a> 10 ) or ! ( $a < 20 ));
var_dump($oparacion2);