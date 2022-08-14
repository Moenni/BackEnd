<?php

$A=10;
$B= 20;

$C=!(!($A<>10) or(20>$B) and ($A==10) and false) and true;
var_dump($C);