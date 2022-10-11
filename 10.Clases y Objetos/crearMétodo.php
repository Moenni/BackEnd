<?php

//-----------------------------
//--Creación de métodos
//-----------------------------

/*

Cuando una función se encuentra dentro de una clase, normalmente se denomina método.Creamos el método igual que la funcion, la unica diferencia...
lo llamamos método.
*/

class Persona{
    const PROMEDIO_VIDA=80;
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $fechaDeNacimiento=1974;
    
    public function getNombre(){

    }
    public function setNombre($nombre){

    }
}

$nuevaPersona= new Persona();