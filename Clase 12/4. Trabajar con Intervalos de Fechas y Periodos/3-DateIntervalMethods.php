<?php
echo '<pre>';

$fecha1 = new DateTime('12 January 2022 4:30 am');
echo 'Fecha 1: ' . $fecha1->format('F j, Y g:i a') . '<br>';

$fecha2 = new DateTime('10 September 2022 5:30:20 am');
echo 'Fecha 2: ' . $fecha2->format('F j, Y g:i:s a') . '<br>';

$intervalo = new DateInterval('P2Y');
echo 'Fecha 1 mas 2 years: ' . $fecha1->add($intervalo)->format('F j, Y g:i:s a') . '<br>';

$intervalo = new DateInterval('P1Y3M4DT6H8M');
echo 'Fecha 2 menos 1Y3M4DT6H8M: ' . $fecha2->sub($intervalo)->format('F j, Y g:i:s a') . '<br>';

$diff_intervalo = $fecha1->diff($fecha2);
echo 'Intervalo: ' . $diff_intervalo->format('%r %y years %m months %d days %h hours %i minutes');
