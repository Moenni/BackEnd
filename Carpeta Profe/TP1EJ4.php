<?php

$a = 20;
$b = $a;
$c = 15;
$d = 10;

$op = (($a == $b) || ($b > $c)) || ($c < $d);
var_dump($op);
