<?php

echo '<br/>';

$dtime = new DateTime('October 17, 2022');

$tzone = $dtime->getTimezone();
echo 'Zona Horaria por defecto: ' . $tzone->getName() . '<br/>';

echo 'Offset DT: ' . $dtime->getOffset() . '<br/>';
echo 'Offset TZ: ' . $tzone->getOffset($dtime) . '<br/>';

$tzone_la = new DateTimeZone('Asia/Magadan');

$dtime->setTimezone($tzone_la);
$new_tz = $dtime->getTimezone();
echo '<hr> Nueva Zona Horaria: ' . $new_tz->getName();

$dtime2 = new DateTime('August 23, 2022', $tzone_la);
$new_tz2 = $dtime2->getTimezone();
echo '<hr> Nueva Zona Horaria2: ' . $new_tz2->getName();

$dtime3 = new DateTime('August 23, 2022 America/Argentina/Salta', $tzone_la);
$new_tz3 = $dtime3->getTimezone();
echo '<hr> Nueva Zona Horaria3: ' . $new_tz3->getName();