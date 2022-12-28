<?php

// Devuelve un array indexado numéricamente que contiene todos los identificadores de zona horaria definidos
$identificadores = DateTimeZone::listIdentifiers();

echo '<br/>';
echo 'Total de identificadores de zona horaria = ' . count($identificadores);
echo '<br/><pre>';
print_r($identificadores);

$zonaHoraria = new DateTimeZone('Pacific/Guam');

// Devuelve la información de localización de una zona horaria
echo '<br/>';
print_r($zonaHoraria->getLocation());

// Devuelve el nombre de la zona horaria
echo '<br/>';
echo $zonaHoraria->getName();