<?php

//-----------------------------
//--Tipos de datos Booleanos
//-----------------------------

$valorVerdadero= true;//tiene valor verdadero
$valorFalso= false;//tiene valor falso 
var_dump($valorVerdadero);
echo $valorVerdadero;
echo "<br>";
var_dump($valorFalso);
echo($valorFalso);
echo "<br>";

$tieneValor= 1234;//tiene valor verdadero
echo "Tiene valor vale 1234: ". (bool) $tieneValor."<br>";

$notieneValor=0;//tiene valor falso
echo "No tiene valor vale 0:".(bool)$notieneValor;//no muestra nada,el falso no devuelve nada
echo "<br>";
$tieneValorCadena= "Cadena";//tiene valor verdadero
echo "La cadena en formato booleano: ".(bool)$tieneValorCadena."<br>";
$noTieneValorCadena="";
echo "La cadena vacia en formato booleano: ".(bool)$noTieneValorCadena;
echo"<br>";
$cadenanumerica= "123.342";
$cadenanumerica2="321";
$numero = $cadenanumerica+$cadenanumerica2;
var_dump($numero);

/*
Estos valores tambien se evaluan como falsos:

    -un Array(arreglo)vacio     
    -Un objeto sin valores  o funciones
    */
