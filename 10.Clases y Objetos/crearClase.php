<?php

//POO --> Paradigma orientado a Objetos

//-----------------------------
//--Creación de una clase 
//-----------------------------

/*

Todas las clases comienzan con el nombre reservado de la clase seguido por el nombre de la clase despues de la cual se ponen dos llaves

Las clases pueden contener sus propias constantes, variables (conocidas como propiedades)
y funciones (llamadas métodos)
*/
class Persona{
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $edad =2022-1974;
    public $altura;
    public $genero;
    
}

$miObjeto= new Persona();