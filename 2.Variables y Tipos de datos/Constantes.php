<?php

//--------------------------------
//--Constantes
//--------------------------------

//solo los valores escalares pueden ser constantes (por ejemplo:boolean, integer, double y string)

define('NUEVA_CONSTANTE','valor de la constante');//esto es una constante de cadena
define('CONSTANTE_NUMERO',1234);//esto es una constante numerica
define('CONSTANTE_FLOAT',12.34);//esto es una constante con un punto flotante 
define('CONSTANTE_BOOLEANA',true);//esto es una constante booleana

echo NUEVA_CONSTANTE."<br>";//esto es un echo de una constante Notar que no lleva el simbolo $
echo CONSTANTE_NUMERO."<br>";//esto es un echo de una constante numerica 
echo CONSTANTE_FLOAT."<br>";//esto es un echo de una constante float
echo CONSTANTE_BOOLEANA."<br>";//esto es un echo de una constante booleana

echo NUEVA_CONSTANTE."<br>".CONSTANTE_NUMERO."<br>".CONSTANTE_FLOAT."<br>".CONSTANTE_BOOLEANA;





