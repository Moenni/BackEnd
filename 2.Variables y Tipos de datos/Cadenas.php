<?php

//-----------------------------------
// --Tipos de datos de cadena de caracteres
//-----------------------------------

$unaCadenaConDobleComillas="Cadena con 'comillas' Dobles";
 echo $unaCadenaConDobleComillas;
 echo "<br>"; //salto de linea
 $unaCadenaSimple= 'Cadena con "comillas" simples';
 echo $unaCadenaSimple;
 echo "<br>";
$cadena1= " Hola ";
echo "Soy la cadena 1: ".$cadena1."<br>";

$cadena2= " Mundo!"; 
echo "Soy la cadena 2: ".$cadena2."<br>";

$cadena3= $cadena1 . $cadena2; //el simbolo punto hace una concatenacion de cadenas
echo "Soy la candena3: ". $cadena3."<br>";
 ?>