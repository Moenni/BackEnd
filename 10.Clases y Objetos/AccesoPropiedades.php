<?php

//--------------------------------
//-- Acceso a las propiedades
//--------------------------------

/*
Usando el objeto que hemos creado podemos acceder a las propiedades individuales utilizando el ->(operador de objeto) seguido del nombre de la propiedad (sin $)
Podemos anular el valor dentro de la propiedad tratándola como una y estableciendo un nuevo valor
La proxima vez que accedamos a ella ... se utilizará el nuevo valor
*/

use Persona as GlobalPersona;

class Persona{
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $edad =2022-1974;
    public $altura;
    public $genero;
    
}

$Leo= new Persona();

echo $Leo ->edad.PHP_EOL;//llamo a la funcion y busco el tipo de objeto

$Leo->nombre="Leo".PHP_EOL; //llamo a la funcion y cambio el valor del objeto nombre

echo $Leo->nombre; //llamo a la funcion y busco el nuevo valor del objeto nombre

$Angelina = new Persona("Angelina","Jolie",52);

$Personas=[$Angelina,$Leo];