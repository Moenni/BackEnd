<?php
echo '<pre>';

$ident_pais = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'RU');

echo 'Se encontraron todos estos identificadores: ' . count($ident_pais);
print_r($ident_pais);