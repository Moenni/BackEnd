<?php

echo '<pre>';

$intervalo = new DateInterval('P2Y');
print_r($intervalo);

$intervalo = new DateInterval('P1W');
echo '<hr>';print_r($intervalo);

$intervalo = new DateInterval('P2Y3M4D');
echo '<hr>';print_r($intervalo);

$intervalo = new DateInterval('P2Y3M4DT6H8M');
echo '<hr>';print_r($intervalo);
