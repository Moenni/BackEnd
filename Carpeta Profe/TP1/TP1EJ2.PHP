<?php

$A = 10;
$B = 50;

$C = !(!($A != 10) or (20 > $B) and ($A == 10) && false) && true;
var_dump($C);
