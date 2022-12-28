<?php

echo '<br>';
$fecha = new DateTime();
echo $fecha->format('g:i:s a, F j, Y') . '<br>';

echo $fecha->setDate(2022, 13, 32)
    ->setTime(3, 75)
    ->format('g:i:s a, F j, Y') . '<br>';