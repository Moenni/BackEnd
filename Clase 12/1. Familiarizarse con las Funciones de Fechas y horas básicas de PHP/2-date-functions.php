<?php
ini_set('date.timezone', 'America/Argentina/Jujuy');

date_default_timezone_set('America/Argentina/Jujuy');

$estampa_tiempo_ahora = time();
echo "Estampa de tiempo de ahora: {$estampa_tiempo_ahora} \n";
echo 'Hoy es ' . date('G:i:s \d\e\l l, F j, Y', $estampa_tiempo_ahora) . "\n";


$estampa_tiempo_mañana = $estampa_tiempo_ahora + (60 * 60 * 24);
$estampa_tiempo_mañana = strtotime('+1 day');
echo 'Mañana es ' . date('g:i:s a \o\n l, F j, y', $estampa_tiempo_mañana) . "\n";
echo 'Mañana es ' . date('g:i:s a \o\n l, F j, y', $estampa_tiempo_mañana) . "\n";

$estampa_tiempo_año_nuevo = strtotime('First day of January 2023');
$estampa_tiempo_año_nuevo2 = mktime(0, 0, 0, 1, 1, 2020);
echo 'Año Nuevo del 2023 es ' . date('g:i:s a \o\n l, F j, y', $estampa_tiempo_año_nuevo) . "\n";

echo "\n \n";

$año = 2023;

if (checkdate(2, 29, $año)) {
    echo  "{$año} es un año bisiesto";
} else {
    echo "{$año} NO es un año bisiesto";
}