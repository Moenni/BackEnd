<?php

echo '<pre>';

$intervalo = new DateInterval('P2Y');
print_r($intervalo);

$intervalo = DateInterval::createFromDateString('2 years');
print_r($intervalo);

echo '<hr>';

$intervalo = new DateInterval('P1W');
print_r($intervalo);

$intervalo = DateInterval::createFromDateString('1 week');
print_r($intervalo);

echo '<hr>';

$intervalo = new DateInterval('P2Y3M4D');
print_r($intervalo);

$intervalo = DateInterval::createFromDateString('2 years + 3 months + 4 days');
print_r($intervalo);

echo '<hr>';

$intervalo = new DateInterval('P2Y3M4DT6H8M');
print_r($intervalo);

$intervalo = DateInterval::createFromDateString('2 years + 3 months + 4 days + 6 hours + 8 minutes');
print_r($intervalo);

echo $intervalo->format('%y years %m months %d days %h hours %i minutes');
