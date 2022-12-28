<?php

$estampa_tiempo_ahora = time();
echo "Estampa de tiempo de ahora: {$estampa_tiempo_ahora} \n";

$estampa_tiempo_mañana = $estampa_tiempo_ahora + (60 * 60 * 24);
echo "Estampa de tiempo de mañana: {$estampa_tiempo_mañana} \n";

$estampa_tiempo_mañana = strtotime('+1 day');
echo "Estampa de tiempo de mañana: {$estampa_tiempo_mañana} \n";

$estampa_tiempo_año_nuevo = strtotime('First day of January 2023');
echo "Estampa de tiempo de año nuevo: {$estampa_tiempo_año_nuevo} \n";

$estampa_tiempo_año_nuevo2 = mktime(0, 0, 0, 1, 1, 2020);
echo "Estampa de tiempo de año nuevo con mktime(): {$estampa_tiempo_año_nuevo2} \n";
