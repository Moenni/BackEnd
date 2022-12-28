<?php

echo '<br>';

$fecha1 = new DateTime();
echo 'Fecha1: ' . $fecha1->format('g:i:s a, F j, Y') . '<br>';

$fecha2 = $fecha1->modify('+1 day 9:30 pm');
echo 'Fecha1: ' . $fecha1->format('g:i:s a, F j, Y') . '<br>';
echo 'Fecha2: ' . $fecha2->format('g:i:s a, F j, Y') . '<br>';

echo '<hr>';

$fecha3 = new DateTimeImmutable();
echo 'Fecha3: ' . $fecha3->format('g:i:s a, F j, Y') . '<br>';

$fecha4 = $fecha3->modify('+1 day 9:30 pm');
echo 'Fecha3: ' . $fecha3->format('g:i:s a, F j, Y') . '<br>';
echo 'Fecha4: ' . $fecha4->format('g:i:s a, F j, Y') . '<br>';