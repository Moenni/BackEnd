<?php

echo '<pre>';

$desde = new DateTime('December 31, 2022');
$hasta = new DateTime('January 1, 2024');

//$intervalo = new DateInterval('P2W');
$fechas_de_reunion = DateInterval::createFromDateString('last sunday of next month');

$reuniones = new DatePeriod($desde, $fechas_de_reunion, $hasta, DatePeriod::EXCLUDE_START_DATE);

foreach ($reuniones as $reunion) {
    echo $reunion->format('l, F j, Y') . '<br>';
}